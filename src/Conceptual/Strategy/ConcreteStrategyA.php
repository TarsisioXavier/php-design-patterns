<?php

namespace App\Conceptual\Strategy;

use App\Conceptual\Strategy\Contract\Strategy;

/**
 * Concrete Strategies implement the algorithm while following the base Strategy
 * interface. The interface makes them interchangeable in the Context.
 */
class ConcreteStrategyA implements Strategy
{
    public function doAlgorithm(array $data): array
    {
        sort($data);

        return $data;
    }
}
