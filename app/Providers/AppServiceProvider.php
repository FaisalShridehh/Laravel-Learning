<?php

namespace App\Providers;

use App\Models\Job;
use App\Models\User;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use Illuminate\Validation\Rules\Password;
use Illuminate\Database\Eloquent\Model;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        Blade::component('layouts.layout', 'app-layout');
        // Paginator::defaultView("vendor.pagination.semantic-ui");

        Password::defaults(function () {
            return Password::min(8)
                ->letters()
                ->mixedCase()
                ->numbers()
                ->symbols()
                ->uncompromised();
        });

        Gate::define('edit-job', function (?User $user, Job $job) {
            // dd($user);
           return $job->employer->user->is($user);
        });
    }
}
