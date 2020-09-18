<?php

namespace App;

require __DIR__ . '/../vendor/autoload.php';

// =============================================================================
// CONCEPTUAL EXAMPLE
// =============================================================================
// echo str_pad('', 80, '=', STR_PAD_BOTH);
// echo "\n";
// echo str_pad(' Starting Conceptual Example ', 80, '=', STR_PAD_BOTH);
// echo "\n";
// echo str_pad('', 80, '-', STR_PAD_BOTH);
// echo "\n\n";

// conceptualClientCode();

// =============================================================================
// REAL WORLD EXAMPLE
// =============================================================================
echo str_pad('', 80, '=', STR_PAD_BOTH);
echo "\n";
echo str_pad(' Starting Real World Example ', 80, '=', STR_PAD_BOTH);
echo "\n";
echo str_pad('', 80, '-', STR_PAD_BOTH);
echo "\n\n";

realWorldClientCode();
