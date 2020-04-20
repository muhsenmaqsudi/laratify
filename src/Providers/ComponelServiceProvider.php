<?php


namespace Muhsenmaqsudi\Componel\Providers;


use Illuminate\Console\Command;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Laravel\Ui\UiCommand;
use Muhsenmaqsudi\Componel\Presets\TailwindCssPreset;

class ComponelServiceProvider extends ServiceProvider
{
    public function boot()
    {
        UiCommand::macro('tailwindcss', function (Command $command) {
            TailwindCssPreset::install();

            $command->info('Tailwind CSS scaffolding installed successfully.');

            if ($command->option('auth')) {
                TailwindCssPreset::installAuth();

                $command->info('Tailwind CSS auth scaffolding installed successfully.');
            };

            $command->comment('Please run "npm install && npm run dev" to compile your fresh scaffolding' );
        });

        Paginator::defaultView('pagination::default');
        Paginator::defaultSimpleView('pagination::simple-default');
    }


}