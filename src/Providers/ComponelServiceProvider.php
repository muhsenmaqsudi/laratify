<?php

namespace Muhsenmaqsudi\Componel\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Muhsenmaqsudi\Componel\Commands\UiCommand;

class ComponelServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                UiCommand::class
            ]);
        }

        Paginator::defaultView('pagination::default');
        Paginator::defaultSimpleView('pagination::simple-default');
    }

}