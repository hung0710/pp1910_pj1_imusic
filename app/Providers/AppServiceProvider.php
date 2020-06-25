<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            \App\Repositories\Contracts\CategoryInterface::class,
            \App\Repositories\Eloquent\CategoryRepository::class,
        );
        $this->app->singleton(
            \App\Repositories\Contracts\SongInterface::class,
            \App\Repositories\Eloquent\SongRepository::class,
        );
        $this->app->singleton(
            \App\Repositories\Contracts\ArtistsInterface::class,
            \App\Repositories\Eloquent\ArtistsRepository::class,
        );
        $this->app->singleton(
            \App\Repositories\Contracts\AlbumInterface::class,
            \App\Repositories\Eloquent\AlbumRepository::class,
        );
        $this->app->singleton(
            \App\Repositories\Contracts\AlbumDetailInterface::class,
            \App\Repositories\Eloquent\AlbumDetailRepository::class,
        );
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        //
    }
}
