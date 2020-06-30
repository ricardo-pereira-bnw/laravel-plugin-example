<?php

declare(strict_types=1);

namespace App\Plugin\Example\Providers;

use App\Plugin\Core\Providers\PluginServiceProvider;

class ServiceProvider extends PluginServiceProvider
{
    public function boot()
    {
        parent::boot();
    }

    public function register()
    {
        parent::register();
    }
}
