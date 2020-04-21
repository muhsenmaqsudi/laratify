<?php

namespace Muhsenmaqsudi\Componel\Traits;

use Muhsenmaqsudi\Componel\Presets\TailwindCSS;

trait PresetsInstaller
{
    /**
     * Install the "tailwindcss" preset.
     *
     * @return void
     */
    public function tailwindcss()
    {
        TailwindCSS::install();
        $this->info('TailwindCSS scaffolding installed successfully.');
        $this->comment('Please run "npm install && npm run dev" to compile your fresh scaffolding.');
    }

    /**
     * Install the "tailwindcss" Auth preset.
     *
     * @return void
     */
    public function tailwindcssAuth()
    {
        TailwindCSS::installAuth();
        $this->info('Tailwind CSS auth scaffolding installed successfully.');
    }

}