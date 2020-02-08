<?php

namespace App\RealWorld\HtmlBuilder\Twig;

use App\RealWorld\HtmlBuilder\Twig\TwigRenderer;
use App\RealWorld\HtmlBuilder\Twig\TwigPageTemplate;
use App\RealWorld\HtmlBuilder\Twig\TwigTitleTemplate;
use App\RealWorld\HtmlBuilder\Builder\TemplateFactory;
use App\RealWorld\HtmlBuilder\Builder\Contracts\PageTemplate;
use App\RealWorld\HtmlBuilder\Builder\Contracts\TitleTemplate;
use App\RealWorld\HtmlBuilder\Builder\Contracts\TemplateRenderer;

/**
 * Each Concrete Factory corresponds to a specific variant (or family) of
 * products.
 *
 * This Concrete Factory creates Twig templates.
 */
class TwigTemplateFactory implements TemplateFactory
{
    public function createTitleTemplate(): TitleTemplate
    {
        return new TwigTitleTemplate;
    }

    public function createPageTemplate(): PageTemplate
    {
        return new TwigPageTemplate($this->createTitleTemplate());
    }

    public function getRenderer(): TemplateRenderer
    {
        return new TwigRenderer();
    }
}
