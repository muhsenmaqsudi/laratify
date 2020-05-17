<?php

namespace Muhsenmaqsudi\Laratify\Tests\Feature;

use Muhsenmaqsudi\Laratify\Tests\TestCase;
use Muhsenmaqsudi\Laratify\View\Components\Badge;

class BadgeComponentTest extends TestCase
{
    public function test_it_can_resolves_its_attributes()
    {
        $component = new Badge('white', 'green-500');
        $variables = $component->data();

        $this->assertSame("{$this->hintPath}.badge", $component->render()->getName());
        $this->assertSame($this->baseBgColor, $variables['bgColor']);
        $this->assertSame($this->baseTextColor, $variables['textColor']);
        $this->assertSame('rounded', $variables['rounded']);
    }

    public function test_it_can_resolves_rounded_attribute()
    {
        $component = new Badge('white', 'green-500', true);
        $variables = $component->data();

        $this->assertSame('rounded-full', $variables['rounded']);
    }


    public function test_it_can_render_its_view_with_attributes()
    {
        $compiled = $this->renderView('badge');
        $expected = $this->getHtmlContents();
        $this->assertSame($expected, $compiled);
    }

    private function getHtmlContents()
    {
        return <<<HTML
<span class="text-xs font-semibold inline-block py-1 px-2 rounded-full text-white bg-green-500 last:mr-0 mr-1">
    Your text goes here
</span>
HTML;
    }
}
