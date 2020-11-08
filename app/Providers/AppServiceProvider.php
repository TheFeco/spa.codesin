<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Tag;
use App\Models\Departamento;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $tags = Tag::all();
        $departamentos = Departamento::all();
        // View::share('tags', Tag::all());
        View::share(['tags' => $tags, 'departamentos' => $departamentos]);
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
