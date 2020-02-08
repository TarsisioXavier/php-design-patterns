<?php

namespace App\Conceptual\Factory\Products;

use App\Conceptual\Factory\Products\Product;

/**
 * Concrete Products provide various implementations of the Product interface.
 */
class ConcreteProduct1 implements Product
{
    public function operation(): string
    {
        return "{Result of the ConcreteProduct1}";
    }
}
