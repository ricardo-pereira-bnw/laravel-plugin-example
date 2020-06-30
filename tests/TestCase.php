<?php

declare(strict_types=1);

namespace Tests;

use App\Plugin\Core\Libraries\Tests\PluginTestCase;
use App\Plugin\Example\Providers\ServiceProvider;

abstract class TestCase extends PluginTestCase
{
    protected function serviceProvider(): string
    {
        return ServiceProvider::class;
    }
}
