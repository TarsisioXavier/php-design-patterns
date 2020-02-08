<?php

namespace App\RealWorld\HtmlBuilder\PHP;

use App\RealWorld\HtmlBuilder\Builder\Contracts\TitleTemplate;

/**
 * And this Concrete Product provides PHPTemplate page title templates.
 */
class PHPTemplateTitleTemplate implements TitleTemplate
{
    public function getTemplateString(): string
    {
        return "<h1><?= \$title; ?></h1>";
    }
}
