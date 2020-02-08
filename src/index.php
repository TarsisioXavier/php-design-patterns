<?php

use App\RealWorld\HtmlBuilder\Page;
use App\Conceptual\Products\Factory\ConcreteFactory1;
use App\Conceptual\Products\Factory\ConcreteFactory2;
use App\RealWorld\HtmlBuilder\PHP\PHPTemplateFactory;
use App\RealWorld\HtmlBuilder\Twig\TwigTemplateFactory;

require __DIR__ . '/../vendor/autoload.php';

// =============================================================================
// CONCEPTUAL EXAMPLE
// =============================================================================
echo str_pad('', 80, '=', STR_PAD_BOTH);
echo "\n";
echo str_pad(' Starting Conceptual Example ', 80, '=', STR_PAD_BOTH);
echo "\n";
echo str_pad('', 80, '-', STR_PAD_BOTH);
echo "\n\n";

/**
 * The client code can work with any concrete factory class.
 */
echo "Client: Testing client code with the first factory type:";
echo "\n";
clientCode(new ConcreteFactory1);
echo "\n";

echo "Client: Testing the same client code with the second factory type:";
echo "\n";
clientCode(new ConcreteFactory2);
echo "\n\n";


// =============================================================================
// REAL WORLD EXAMPLE
// =============================================================================
echo str_pad('', 80, '=', STR_PAD_BOTH);
echo "\n";
echo str_pad(' Starting Conceptual Example ', 80, '=', STR_PAD_BOTH);
echo "\n";
echo str_pad('', 80, '-', STR_PAD_BOTH);
echo "\n\n";

/**
 * Now, in other parts of the app, the client code can accept factory objects of
 * any type.
 */
$page = new Page('Sample page', 'This it the body.');

echo "Testing actual rendering with the PHPTemplate factory:\n";
echo $page->render(new PHPTemplateFactory);

// Uncomment the following if you have Twig installed.
// echo "\n";
// echo "Testing rendering with the Twig factory:\n";
// echo $page->render(new TwigTemplateFactory);
echo "\n\n";
