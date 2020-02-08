<?php

namespace App\Conceptual\Products;

use App\Conceptual\Products\Contracts\AbstractProductA;

/**
 * Concrete Products are created by corresponding Concrete Factories.
 */
class ConcreteProductA2 implements AbstractProductA
{
    public function usefulFunctionA(): string
    {
        return "The result of the product A2.";
    }
}
