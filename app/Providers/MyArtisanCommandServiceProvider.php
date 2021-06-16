<?php

namespace App\Providers;

use Illuminate\Foundation\Providers\ArtisanServiceProvider;

class MyArtisanCommandServiceProvider extends ArtisanServiceProvider
{
    /**
     * The commands to be registered.
     *
     * @var array
     */
    protected $commands = [
        'CacheClear' => 'command.cache.clear',
        'ConfigCache' => 'command.config.cache',
        'ConfigClear' => 'command.config.clear',
        'Down' => 'command.down',
        'Up' => 'command.up',
    ];

    /**
     * The commands to be registered.
     *
     * @var array
     */
    protected $devCommands = [];
}
