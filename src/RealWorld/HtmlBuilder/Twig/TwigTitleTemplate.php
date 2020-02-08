<?php

namespace App\RealWorld\HtmlBuilder\Twig;

use App\RealWorld\HtmlBuilder\Builder\Contracts\TitleTemplate;

/**
 * This Concrete Product provides Twig page title templates.
 */
class TwigTitleTemplate implements TitleTemplate
{
    public function getTemplateString(): string
    {
        return "<h1>{{ title }}</h1>";
    }
}
