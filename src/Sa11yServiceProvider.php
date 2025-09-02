<?php

namespace poldixd\Sa11y;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use poldixd\Sa11y\View\Components\Sa11yComponent;

class Sa11yServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/sa11y.php',
            'sa11y'
        );

        Blade::component('sa11y', Sa11yComponent::class);
    }
}
