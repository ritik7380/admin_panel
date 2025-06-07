<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserApiController extends Controller
{
    public function index()
    {
        $users = User::select('id', 'first_name', 'last_name', 'email', 'status', 'date_of_birth', 'city')->get();

        return response()->json([
            'success' => true,
            'data' => $users,
        ]);
    }
}

