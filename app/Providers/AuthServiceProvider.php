<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // Superadmin bypasses all permission checks
        Gate::before(fn ($user, $ability) => $user->hasRole('superadmin') ? true : null);
    }
}
