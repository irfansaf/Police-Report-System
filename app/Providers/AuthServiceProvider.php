<?php

namespace App\Providers;

 use App\Models\User;
 use Illuminate\Support\Facades\Gate;
 use Illuminate\Auth\Access\Response;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();
        Gate::define('access-user-dashboard', function (User $user) {
            return $user->role === 'user'
                ? Response::allow()
                : Response::deny('You are not authorized to access the user dashboard.');
        });
        Gate::define('access-police-dashboard', function (User $user) {
            return $user->role === 'police'
                ? Response::allow()
                : Response::deny('You are not authorized to access the police dashboard.');
        });
    }
}
