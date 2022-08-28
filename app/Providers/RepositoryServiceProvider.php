<?php

namespace App\Providers;

use App\Repositories\Api\ApiRepository;
use App\Repositories\Api\ApiRepositoryInterface;
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
        $this->app->bind(StudentRepositoryInterface::class,StudentRepository::class);
        $this->app->bind(ApiRepositoryInterface::class,ApiRepository::class);
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
