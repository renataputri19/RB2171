<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;
use App\Http\Livewire\ManageCriteria;
use App\Http\Livewire\ManageReform;

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
        Livewire::component('manage-criteria', ManageCriteria::class);
        Livewire::component('manage-reform', ManageReform::class);
    }
}
