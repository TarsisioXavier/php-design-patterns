<?php

namespace App\RealWorld\HtmlBuilder\PHP;

use App\RealWorld\HtmlBuilder\Builder\TemplateFactory;
use App\RealWorld\HtmlBuilder\PHP\PHPTemplateRenderer;
use App\RealWorld\HtmlBuilder\PHP\PHPTemplatePageTemplate;
use App\RealWorld\HtmlBuilder\PHP\PHPTemplateTitleTemplate;
use App\RealWorld\HtmlBuilder\Builder\Contracts\PageTemplate;
use App\RealWorld\HtmlBuilder\Builder\Contracts\TitleTemplate;
use App\RealWorld\HtmlBuilder\Builder\Contracts\TemplateRenderer;

/**
 * And this Concrete Factory creates PHPTemplate templates.
 */
class PHPTemplateFactory implements TemplateFactory
{
    public function createTitleTemplate(): TitleTemplate
    {
        return new PHPTemplateTitleTemplate;
    }

    public function createPageTemplate(): PageTemplate
    {
        return new PHPTemplatePageTemplate($this->createTitleTemplate());
    }

    public function getRenderer(): TemplateRenderer
    {
        return new PHPTemplateRenderer();
    }
}
