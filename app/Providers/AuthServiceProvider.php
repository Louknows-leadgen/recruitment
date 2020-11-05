<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Log;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
        Gate::define('access', function ($user, ...$access_type) {
            return in_array($user->roleid,$access_type);
        });

        Gate::define('edit-jo-date', function($user,$app_stat_id){
            // return true if application_status_id is "For Job Orientation" in application_statuses table
            return $app_stat_id == 7 ? true : false;
        });
    }
}
