<?php

namespace App\Providers;

use About;
use App\Models\About as ModelsAbout;
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
            View::share('school_name', $school_name);
        }
    }
}
