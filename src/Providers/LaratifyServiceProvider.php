<?php

namespace Muhsenmaqsudi\Laratify\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Muhsenmaqsudi\Laratify\Commands\UiCommand;
use Muhsenmaqsudi\Laratify\View\Components\Alert;
use Muhsenmaqsudi\Laratify\View\Components\Badge;
use Muhsenmaqsudi\Laratify\View\Components\Button;
use Muhsenmaqsudi\Laratify\View\Components\Card;
use Muhsenmaqsudi\Laratify\View\Components\Checkbox;
use Muhsenmaqsudi\Laratify\View\Components\Col;
use Muhsenmaqsudi\Laratify\View\Components\Collapse;
use Muhsenmaqsudi\Laratify\View\Components\Container;
use Muhsenmaqsudi\Laratify\View\Components\Dialog;
use Muhsenmaqsudi\Laratify\View\Components\Dropdown;
use Muhsenmaqsudi\Laratify\View\Components\File;
use Muhsenmaqsudi\Laratify\View\Components\Grid;
use Muhsenmaqsudi\Laratify\View\Components\Grids;
use Muhsenmaqsudi\Laratify\View\Components\Input;
use Muhsenmaqsudi\Laratify\View\Components\Navbar;
use Muhsenmaqsudi\Laratify\View\Components\Radios;
use Muhsenmaqsudi\Laratify\View\Components\Row;
use Muhsenmaqsudi\Laratify\View\Components\Select;
use Muhsenmaqsudi\Laratify\View\Components\Tab;
use Muhsenmaqsudi\Laratify\View\Components\Table;
use Muhsenmaqsudi\Laratify\View\Components\Tabs;
use Muhsenmaqsudi\Laratify\View\Components\Textarea;
use Muhsenmaqsudi\Laratify\View\Components\Tooltip;

class LaratifyServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                UiCommand::class
            ]);
        }

        $this->mergeConfigFrom(__DIR__.'/../../config/laratify.php', 'laratify');
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'laratify');

        $this->publishes([__DIR__ . '/../../resources/views' => resource_path('views/vendor/laratify')], 'laratify-views');

        $this->publishes([
            __DIR__.'/../../config/laratify.php' => config_path('laratify.php')
        ], 'laratify-config');

        $this->loadViewComponentsAs('laratify', [
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
            Navbar::class,
            Table::class,
            Tabs::class,
            Tab::class,
            Collapse::class
        ]);

        Paginator::defaultView('pagination::default');
        Paginator::defaultSimpleView('pagination::simple-default');
    }

}
