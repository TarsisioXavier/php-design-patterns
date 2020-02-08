<?php

namespace App\RealWorld\HtmlBuilder\Builder\Contracts;

/**
 * This is another Abstract Product type, which describes whole page templates.
 */
interface PageTemplate
{
    public function getTemplateString(): string;
}
