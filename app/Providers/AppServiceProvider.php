<?php

namespace App\Providers;

use App\Category;
use App\Language;
use App\Type;
use App\Tag;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        if(Schema::hasTable('categories') && Schema::hasTable('types') && Schema::hasTable('languages')) {
            View::share('categories', Category::all());
            View::share('types', Type::all());
            View::share('languages', Language::all());
            View::share('tags', Tag::all());
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
