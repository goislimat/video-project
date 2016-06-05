<?php

namespace App\Providers;

use App\Repositories\CustomerRepository;
use App\Repositories\CustomerRepositoryEloquent;
use App\Repositories\DriverRepository;
use App\Repositories\DriverRepositoryEloquent;
use App\Repositories\JobRepository;
use App\Repositories\JobRepositoryEloquent;
use App\Repositories\SchoolTransportRepository;
use App\Repositories\SchoolTransportRepositoryEloquent;
use Illuminate\Support\ServiceProvider;

class AppRepositoryProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            CustomerRepository::class,
            CustomerRepositoryEloquent::class
        );

        $this->app->bind(
            DriverRepository::class,
            DriverRepositoryEloquent::class
        );

        $this->app->bind(
            JobRepository::class,
            JobRepositoryEloquent::class
        );

        $this->app->bind(
            SchoolTransportRepository::class,
            SchoolTransportRepositoryEloquent::class
        );
    }
}
