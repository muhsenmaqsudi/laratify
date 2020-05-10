<?php


namespace Muhsenmaqsudi\Componel\Presets;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Arr;

class TailwindCSS extends Preset
{
    const NPM_DEV_PACKAGES_TO_ADD = [
        'laravel-mix' => '^5.0.1',
        'laravel-mix-purgecss' => '^4.1',
        'laravel-mix-tailwind' => '^0.1.0',
        'tailwindcss' => '^1.0',
        '@tailwindcss/custom-forms' => '^0.2'
    ];

    const NPM_PACKAGES_TO_ADD = [
        'alpinejs' => '^2.3.1',
        'tippy.js' => '^6.2.3'
    ];

    const NPM_DEV_PACKAGES_TO_REMOVE = [
        'bootstrap',
        'botstrap-saas',
        'laravel-mix',
        'jquery',
        'vue',
        'vue-template-compiler'
    ];

    public static function install()
    {
        // updating devDependencies packages
        static::updatePackages();
        static::updatePackages(false);
        static::updateStyles();
        static::updateBootstrapping();
        static::updatePagination();
        static::removeNodeModules();
    }

    public static function installAuth()
    {
        static::scaffoldController();
        static::scaffoldAuth();
        static::updateViews();
    }

    protected static function updatePackageArray(array $packages, $configKey)
    {
        if ($configKey === 'devDependencies') {
            return array_merge(
                static::NPM_DEV_PACKAGES_TO_ADD,
                Arr::except($packages, static::NPM_DEV_PACKAGES_TO_REMOVE));
        } else {
            return array_merge(self::NPM_PACKAGES_TO_ADD, $packages);
        }
    }

    protected static function updateStyles()
    {
        tap(new Filesystem(), function (Filesystem $filesystem) {
            $filesystem->deleteDirectory(resource_path('sass'));
            $filesystem->delete(public_path('js/app.js'));
            $filesystem->delete(public_path('css/app.css'));

            if (!$filesystem->isDirectory($directory = resource_path('css'))) {
                $filesystem->makeDirectory($directory, 0775, true);
            }
        });

        copy(__DIR__ . '/tailwindcss-stubs/resources/css/app.css', resource_path('css/app.css'));
    }

    protected static function updateBootstrapping()
    {
        copy(__DIR__ . '/tailwindcss-stubs/tailwind.config.js', base_path('tailwind.config.js'));
        copy(__DIR__ . '/tailwindcss-stubs/webpack.mx.js', base_path('webpack.mix.js'));
        copy(__DIR__ . '/tailwindcss-stubs/resources/js/bootstrap.js', resource_path('js/bootstrap.js'));
    }

    protected static function updatePagination()
    {
        (new Filesystem)->delete(resource_path('view/vendor/paginate'));
        (new Filesystem)->copyDirectory(__DIR__ . '/tailwindcss-stubs/resources/views/vendor/pagination', resource_path('views/vendor/pagination'));
    }

    protected static function updateWelcomePage()
    {
        (new Filesystem)->delete(resource_path('views/welcome.blade.php'));
        copy(__DIR__ . '/tailwindcss-stubs/resources/views/welcome.blade.php', resource_path('views/welcome.blade.php'));
    }

    protected static function updateViews()
    {
        (new Filesystem)->copyDirectory(__DIR__ . '/tailwindcss-stubs/resources/views', resource_path('views'));
    }
}