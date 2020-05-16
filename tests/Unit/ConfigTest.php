<?php

namespace Muhsenmaqsudi\Laratify\Tests\Unit;

use Muhsenmaqsudi\Laratify\Tests\TestCase;

class ConfigTest extends TestCase
{
    public function test_it_has_config_file()
    {
        $this->assertTrue(is_array(config('laratify')));
    }

    public function test_it_has_base_text_color_config()
    {
        $this->assertEquals('white', config('laratify.text-base-color'));
        config(['laratify.text-base-color' => 'red-500']);
        $this->assertEquals('red-500', config('laratify.text-base-color'));
    }

    public function test_it_has_base_background_color_config()
    {
        $this->assertEquals('blue-500', config('laratify.background-base-color'));
        config(['laratify.background-base-color' => 'green-500']);
        $this->assertEquals('green-500', config('laratify.background-base-color'));
    }

    public function test_config_file_can_be_published()
    {
        $this->artisan('vendor:publish', ['--tag' => 'laratify-config', '--no-interaction' => true]);
        $this->assertFileExists(config_path('laratify.php'));
        $this->removeFileOrDir(config_path('laratify.php'));
    }
}
