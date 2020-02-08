<?php

use App\RealWorld\Factory\FacebookPoster;
use App\RealWorld\Factory\LinkedInPoster;
use App\Conceptual\Factory\ConcreteCreator1;
use App\Conceptual\Factory\ConcreteCreator2;

require __DIR__ . '/../vendor/autoload.php';

// =============================================================================
// CONCEPTUAL EXAMPLE
// =============================================================================

/**
 * The Application picks a creator's type depending on the configuration or
 * environment.
 */
echo str_pad('', 80, '=', STR_PAD_BOTH);
echo "\n";
echo str_pad(' Starting Conceptual Example ', 80, '=', STR_PAD_BOTH);
echo "\n";
echo str_pad('', 80, '-', STR_PAD_BOTH);
echo "\n\n";

echo "App: Launched with the ConcreteCreator1.";
conceptualClientCode(new ConcreteCreator1);
echo "\n\n";

echo "App: Launched with the ConcreteCreator2.";
echo "\n";
conceptualClientCode(new ConcreteCreator2);
echo "\n\n\n";


// =============================================================================
// REAL WORLD EXAMPLE
// =============================================================================
echo str_pad('', 80, '=', STR_PAD_BOTH);
echo "\n";
echo str_pad(' Starting Real World ', 80, '=', STR_PAD_BOTH);
echo "\n";
echo str_pad('', 80, '-', STR_PAD_BOTH);
echo "\n\n";

/**
 * During the initialization phase, the app can decide which social network it
 * wants to work with, create an object of the proper subclass, and pass it to
 * the client code.
 */
echo "Testing ConcreteCreator1:\n";
realWorldClientCode(new FacebookPoster("john_smith", "******"));
echo "\n\n";

echo "Testing ConcreteCreator2:\n";
realWorldClientCode(new LinkedInPoster("john_smith@example.com", "******"));
echo "\n\n\n";
