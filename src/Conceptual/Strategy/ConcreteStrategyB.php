<?php

namespace App\Conceptual\Strategy;

use App\Conceptual\Strategy\Contract\Strategy;

class ConcreteStrategyB implements Strategy
{
    public function doAlgorithm(array $data): array
    {
        rsort($data);

        return $data;
    }
}
