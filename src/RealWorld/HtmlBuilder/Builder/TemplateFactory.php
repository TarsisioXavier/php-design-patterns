<?php

namespace App\RealWorld\HtmlBuilder\Builder;

use App\RealWorld\HtmlBuilder\Builder\Contracts\PageTemplate;
use App\RealWorld\HtmlBuilder\Builder\Contracts\TitleTemplate;
use App\RealWorld\HtmlBuilder\Builder\Contracts\TemplateRenderer;

/**
 * The Abstract Factory interface declares creation methods for each distinct
 * product type.
 */
interface TemplateFactory
{
    public function createTitleTemplate(): TitleTemplate;

    public function createPageTemplate(): PageTemplate;

    public function getRenderer(): TemplateRenderer;
}
