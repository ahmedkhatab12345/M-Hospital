<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\Sections\SectionsRepositoryInterface; 
use App\Repository\Sections\SectionsRepository;
use App\Interfaces\Doctors\DoctorRepositoryInterface; 
use App\Interfaces\Services\SingleServiceRepositoryInterface;
use App\Repository\Doctors\DoctorsRepository;
use App\Repository\Services\SingleServiceRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(SectionsRepositoryInterface::class, SectionsRepository::class);
        $this->app->bind(DoctorRepositoryInterface::class, DoctorsRepository::class);
        $this->app->bind(SingleServiceRepositoryInterface::class, SingleServiceRepository::class);
        $this->app->bind(SingleServiceRepositoryInterface::class, SingleServiceRepository::class);

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
