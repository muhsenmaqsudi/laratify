<?php

namespace Muhsenmaqsudi\Laratify\Presets;

use Illuminate\Container\Container;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Str;
use Symfony\Component\Finder\SplFileInfo;

/**
 * Class Preset
 * @copyright Laravel/Ui
 * @package Muhsenmaqsudi\Laratify\Presets
 */
class Preset
{
    const TAILWINDCSS = 'tailwindcss';
    const PRESET_TYPES = [
        self::TAILWINDCSS
    ];

    /**
     * Ensure the component directories we need exist.
     *
     * @return void
     */
    protected static function ensureComponentDirectoryExists()
    {
        $filesystem = new Filesystem;

        if (!$filesystem->isDirectory($directory = resource_path('js/components'))) {
            $filesystem->makeDirectory($directory, 0755, true);
        }
    }

    /**
     * Update the "package.json" file.
     *
     * @param bool $dev
     * @return void
     */
    protected static function updatePackages($dev = true)
    {
        if (!file_exists(base_path('package.json'))) {
            return;
        }

        $configurationKey = $dev ? 'devDependencies' : 'dependencies';

        $packages = json_decode(file_get_contents(base_path('package.json')), true);

        $packages[$configurationKey] = static::updatePackageArray(
            array_key_exists($configurationKey, $packages) ? $packages[$configurationKey] : [],
            $configurationKey
        );

        ksort($packages[$configurationKey]);

        file_put_contents(
            base_path('package.json'),
            json_encode($packages, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . PHP_EOL
        );
    }

    /**
     * Remove the installed Node modules.
     *
     * @return void
     */
    protected static function removeNodeModules()
    {
        tap(new Filesystem, function (Filesystem $files) {
            $files->deleteDirectory(base_path('node_modules'));

            $files->delete(base_path('yarn.lock'));
        });
    }

    protected static function scaffoldController()
    {
        if (!is_dir($directory = app_path('Http/Controllers/Auth'))) {
            mkdir($directory, 0755, true);
        }

        $filesystem = new Filesystem;

        collect($filesystem->allFiles(__DIR__ . '/../../resources/stubs/auth/Auth'))
            ->each(function (SplFileInfo $file) use ($filesystem) {
                $filesystem->copy(
                    $file->getPathname(),
                    app_path('Http/Controllers/Auth/' . Str::replaceLast('.stub', '.php', $file->getFilename()))
                );
            });
    }

    protected static function scaffoldAuth()
    {
        file_put_contents(app_path('Http/Controllers/HomeController.php'), static::compileControllerStub());

        file_put_contents(
            base_path('routes/web.php'),
            "Auth::routes();\n\nRoute::get('/home', 'HomeController@index')->name('home');\n\n",
            FILE_APPEND
        );

        tap(new Filesystem, function (Filesystem $filesystem) {
//            $filesystem->copyDirectory(__DIR__ . '/tailwindcss-stubs/resources/views', resource_path('views'));
            collect($filesystem->allFiles(__DIR__ . '/../../resources/stubs/auth/migrations'))
                ->each(function (SplFileInfo $file) use ($filesystem) {
                    $filesystem->copy(
                        $file->getPathname(),
                        database_path('migrations/' . $file->getFilename())
                    );
                });
        });
    }

    private static function compileControllerStub()
    {
        return str_replace(
            '{{namespace}}',
            Container::getInstance()->getNamespace(),
            file_get_contents(__DIR__ . '/tailwindcss-stubs/controllers/HomeController.stub')
        );
    }
}
