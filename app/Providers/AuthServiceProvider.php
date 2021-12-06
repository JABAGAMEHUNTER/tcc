<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('is_admin', function ($user) {
            return $user->usertipo=='admin'
                ? true
                :false;

        });
        Gate::define('is_produtor', function ($user) {
            return $user->usertipo=='produtor'
                ? true
                :false;

        });
        Gate::define('is_feirante', function ($user) {
            return $user->usertipo=='feirante'
                ? true
                :false;

        });
    }
}
