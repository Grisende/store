<?php

namespace App\Providers;

use App\Interface\ProductRepositoryInterface;
use App\Interface\ProductTagRepositoryInterface;
use App\Interface\TagRepositoryInterface;
use App\Repository\ProductRepository;
use App\Repository\ProductTagRepository;
use App\Repository\TagRepository;
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
        $this->app->bind(ProductRepositoryInterface::class, ProductRepository::class);
        $this->app->bind(TagRepositoryInterface::class, TagRepository::class);
        $this->app->bind(ProductTagRepositoryInterface::class, ProductTagRepository::class);
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
