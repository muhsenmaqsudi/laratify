<?php

namespace Muhsenmaqsudi\Laratify\Commands;

use Illuminate\Console\Command;
use Muhsenmaqsudi\Laratify\Presets\Preset;
use Muhsenmaqsudi\Laratify\Traits\PresetsInstaller;

class UiCommand extends Command
{
    use PresetsInstaller;

    private $defaultPreset = Preset::TAILWINDCSS;
    private $defaultAuth = Preset::TAILWINDCSS . 'Auth';

    /**
     * The console command signature.
     *
     * @var string
     */
    protected $signature = 'laratify:ui
        { --auth : Install authentication UI scaffolding }';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Swap the front-end scaffolding for the application to tailwindcss';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->{$this->defaultPreset}();

        if ($this->option('auth')) {
            $this->{$this->defaultAuth}();
        }
    }
}
