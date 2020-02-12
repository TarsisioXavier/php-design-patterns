<?php

use App\Conceptual\Builder\Director;
use App\RealWorld\Database\Grammar\MysqlQueryBuilder;
use App\RealWorld\Database\Grammar\PostgresQueryBuilder;

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

$director = new Director;

conceptualClientCode($director);
echo "\n";

// =============================================================================
// REAL WORLD EXAMPLE
// =============================================================================

echo str_pad('', 80, '=', STR_PAD_BOTH);
echo "\n";
echo str_pad(' Starting Real World Example ', 80, '=', STR_PAD_BOTH);
echo "\n";
echo str_pad('', 80, '-', STR_PAD_BOTH);
echo "\n\n";

/**
 * The application selects the proper query builder type depending on a current
 * configuration or the environment settings.
 */
// if ($_ENV['database_type'] == 'postgres') {
//     $builder = new PostgresQueryBuilder(); } else {
//     $builder = new MysqlQueryBuilder; }
//
// realWorldClientCode($builder);

echo "Testing MySQL query builder:";
realWorldClientCode(new MysqlQueryBuilder);
echo "\n\n";

echo "Testing PostgresSQL query builder:";
realWorldClientCode(new PostgresQueryBuilder);
echo "\n\n";
