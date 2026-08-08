<?php

namespace App\Providers;

use App\Models\Contact;
use App\Models\Service;
use App\Models\Therapist;
use App\PublishStatus;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        Schema::defaultStringLength(191);

        // Share with all front-end views
        View::composer(['front-layout.*', 'front-pages.*'], function ($view) {
            // Using static variables to cache queries for the current request
            static $contacts, $nav_services, $nav_therapists;

            if (is_null($contacts) && Schema::hasTable('contacts')) {
                $contacts = Contact::orderBy('id', 'DESC')->limit(1)->get();
            }
            if (is_null($nav_services) && Schema::hasTable('services')) {
                $nav_services = Service::published()->orderBy('order')->get();
            }
            if (is_null($nav_therapists) && Schema::hasTable('therapists')) {
                $nav_therapists = Therapist::published()->orderBy('order', 'ASC')->get();
            }

            $view->with('contacts', $contacts ?? collect());
            $view->with('nav_services', $nav_services ?? collect());
            $view->with('nav_therapists', $nav_therapists ?? collect());
        });
    }
}
