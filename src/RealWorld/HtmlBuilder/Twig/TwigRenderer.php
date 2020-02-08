<?php

namespace App\RealWorld\HtmlBuilder\Twig;

use App\RealWorld\HtmlBuilder\Builder\Contracts\TemplateRenderer;

/**
 * The renderer for Twig templates.
 */
class TwigRenderer implements TemplateRenderer
{
    public function render(string $templateString, array $arguments = []): string
    {
        return \Twig::render($templateString, $arguments);
    }
}
