<?php

namespace poldixd\Sa11y\Tests;

use Illuminate\Foundation\Testing\Concerns\InteractsWithViews;
use Orchestra\Testbench\TestCase as BaseTestCase;
use poldixd\Sa11y\Sa11yServiceProvider;

class TestCase extends BaseTestCase
{
    use InteractsWithViews;

    protected function getPackageProviders($app): array
    {
        return [
            Sa11yServiceProvider::class,
        ];
    }
}
