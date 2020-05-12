<?php

namespace Muhsenmaqsudi\Componel\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Muhsenmaqsudi\Componel\Commands\UiCommand;
use Muhsenmaqsudi\Componel\View\Components\Alert;
use Muhsenmaqsudi\Componel\View\Components\Badge;
use Muhsenmaqsudi\Componel\View\Components\Button;
use Muhsenmaqsudi\Componel\View\Components\Card;
use Muhsenmaqsudi\Componel\View\Components\Checkbox;
use Muhsenmaqsudi\Componel\View\Components\Col;
use Muhsenmaqsudi\Componel\View\Components\Container;
use Muhsenmaqsudi\Componel\View\Components\Dialog;
use Muhsenmaqsudi\Componel\View\Components\Dropdown;
use Muhsenmaqsudi\Componel\View\Components\File;
use Muhsenmaqsudi\Componel\View\Components\Grid;
use Muhsenmaqsudi\Componel\View\Components\Grids;
use Muhsenmaqsudi\Componel\View\Components\Input;
use Muhsenmaqsudi\Componel\View\Components\Navbar;
use Muhsenmaqsudi\Componel\View\Components\Radios;
use Muhsenmaqsudi\Componel\View\Components\Row;
use Muhsenmaqsudi\Componel\View\Components\Select;
use Muhsenmaqsudi\Componel\View\Components\Textarea;
use Muhsenmaqsudi\Componel\View\Components\Tooltip;

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
            Dropdown::class,
            Dialog::class,
            Tooltip::class,
            Grids::class,
            Grid::class,
            Container::class,
            Col::class,
            Row::class,
            Card::class,
            Navbar::class
        ]);

        Paginator::defaultView('pagination::default');
        Paginator::defaultSimpleView('pagination::simple-default');
    }

}
