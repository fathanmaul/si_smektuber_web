<?php

namespace App\Providers;

use About;
use App\Models\About as ModelsAbout;
// use Illuminate\Contracts\Validation\Validator;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (!$this->app->runningInConsole()) {
            $school_name = ModelsAbout::pluck('school_name')->first();
            $school_info = \App\Models\About::first();
            View::share('school_name', $school_name);
            View::share('school_info', $school_info);
        }
        Validator::extend('year', function ($attribute, $value, $parameters, $validator) {
            return preg_match('/^\d{4}$/', $value);
        });
    }
}
