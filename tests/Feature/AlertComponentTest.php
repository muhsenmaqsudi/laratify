<?php

namespace Muhsenmaqsudi\Laratify\Tests\Feature;

use Muhsenmaqsudi\Laratify\Tests\TestCase;
use Muhsenmaqsudi\Laratify\View\Components\Alert;

class AlertComponentTest extends TestCase
{
    public function test_it_can_resolves_its_variables()
    {
        $component = new Alert('white', 'green-500');
        $variables = $component->data();

        $this->assertSame("{$this->hintPath}.alert", $component->render()->getName());
        $this->assertSame($this->baseBgColor, $variables['bgColor']);
        $this->assertSame($this->baseTextColor, $variables['textColor']);
    }

    public function test_it_can_render_its_view_with_attributes()
    {
        $compiled = $this->renderView('alert');
        $expected = $this->getHtmlContents();
        $this->assertSame($expected, $compiled);
    }

    private function getHtmlContents()
    {
        return <<<HTML
<div class="text-black px-6 py-4 border-0 rounded relative mb-4 bg-green-500">
    <span class="text-xl inline-block mr-5 align-middle">
        <svg viewBox="0 0 24 24" width="24" height="24">
            <path class="heroicon-ui fill-current"
                  d="M15 19a3 3 0 0 1-6 0H4a1 1 0 0 1 0-2h1v-6a7 7 0 0 1 4.02-6.34 3 3 0 0 1 5.96 0A7 7 0 0 1 19 11v6h1a1 1 0 0 1 0 2h-5zm-4 0a1 1 0 0 0 2 0h-2zm0-12.9A5 5 0 0 0 7 11v6h10v-6a5 5 0 0 0-4-4.9V5a1 1 0 0 0-2 0v1.1z"/>
        </svg>
    </span>
    <span class="inline-block align-middle mr-8">
        Your alert message goes here
    </span>
    <button class="absolute bg-transparent text-2xl font-semibold leading-none right-0 top-0 mt-4 mr-6 outline-none focus:outline-none">
        <svg viewBox="0 0 24 24" width="24" height="24">
            <path class="heroicon-ui fill-current"
                  d="M16.24 14.83a1 1 0 0 1-1.41 1.41L12 13.41l-2.83 2.83a1 1 0 0 1-1.41-1.41L10.59 12 7.76 9.17a1 1 0 0 1 1.41-1.41L12 10.59l2.83-2.83a1 1 0 0 1 1.41 1.41L13.41 12l2.83 2.83z"/>
        </svg>
    </button>
</div>
HTML;
    }
}
