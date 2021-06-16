<?php

namespace App\Providers;

use Illuminate\Database\MigrationServiceProvider;
use Illuminate\Foundation\Providers\ComposerServiceProvider;
use Illuminate\Foundation\Providers\ConsoleSupportServiceProvider;

class MyConsoleSupportServiceProvider extends ConsoleSupportServiceProvider
{
    public function register()
    {
        if ($this->app->environment() == 'production') {
            $this->providers = [
                MyArtisanCommandServiceProvider::class,
                MigrationServiceProvider::class,
                ComposerServiceProvider::class,
            ];
        }
        parent::register();
    }
}
