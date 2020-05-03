<?php

namespace Muhsenmaqsudi\Componel\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Muhsenmaqsudi\Componel\Commands\UiCommand;
use Muhsenmaqsudi\Componel\View\Components\Alert;
use Muhsenmaqsudi\Componel\View\Components\Badge;
use Muhsenmaqsudi\Componel\View\Components\Button;
use Muhsenmaqsudi\Componel\View\Components\Checkbox;
use Muhsenmaqsudi\Componel\View\Components\Dropdown;
use Muhsenmaqsudi\Componel\View\Components\File;
use Muhsenmaqsudi\Componel\View\Components\Input;
use Muhsenmaqsudi\Componel\View\Components\Radios;
use Muhsenmaqsudi\Componel\View\Components\Select;
use Muhsenmaqsudi\Componel\View\Components\Textarea;

class ComponelServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                UiCommand::class
            ]);
        }

        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'componel');
        $this->publishes([__DIR__ . '/../../resources/views' => resource_path('views/vendor/componel')], 'componel-views');

        $this->publishes([
            __DIR__.'/../../config/componel.php' => config_path('componel.php')
        ], 'componel-config');

        $this->loadViewComponentsAs('componel', [
            Alert::class,
            Badge::class,
            Button::class,
            Input::class,
            File::class,
            Textarea::class,
            Checkbox::class,
            Select::class,
            Radios::class,
            Dropdown::class
        ]);

        Paginator::defaultView('pagination::default');
        Paginator::defaultSimpleView('pagination::simple-default');
    }

}
