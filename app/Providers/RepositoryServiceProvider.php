<?php

namespace App\Providers;

use App\Repositories\Interfaces\WorkshopRepositoryInterface;
use App\Repositories\WorkshopRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            WorkshopRepositoryInterface::class, 
            WorkshopRepository::class
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
