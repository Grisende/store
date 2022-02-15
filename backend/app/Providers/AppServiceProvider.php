<?php

namespace App\Providers;

use App\Interface\ProductRepositoryInterface;
use App\Interface\ProductTagRepositoryInterface;
use App\Interface\TagRepositoryInterface;
use App\Repository\ProductRepository;
use App\Repository\ProductTagRepository;
use App\Repository\TagRepository;
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
        $this->app->register(RepositoryServiceProvider::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
