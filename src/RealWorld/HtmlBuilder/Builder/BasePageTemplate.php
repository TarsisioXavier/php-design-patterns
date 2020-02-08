<?php

namespace App\RealWorld\HtmlBuilder\Builder;

use App\RealWorld\HtmlBuilder\Builder\Contracts\PageTemplate;
use App\RealWorld\HtmlBuilder\Builder\Contracts\TitleTemplate;

/**
 * The page template uses the title sub-template, so we have to provide the way
 * to set it in the sub-template object. The abstract factory will link the page
 * template with a title template of the same variant.
 */
abstract class BasePageTemplate implements PageTemplate
{
    protected $titleTemplate;

    public function __construct(TitleTemplate $titleTemplate)
    {
        $this->titleTemplate = $titleTemplate;
    }
}
