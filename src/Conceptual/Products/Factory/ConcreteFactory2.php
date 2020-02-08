<?php

namespace App\Conceptual\Products\Factory;

use App\Conceptual\Products\ConcreteProductA2;
use App\Conceptual\Products\ConcreteProductB2;
use App\Conceptual\Products\Factory\AbstractFactory;
use App\Conceptual\Products\Contracts\AbstractProductA;
use App\Conceptual\Products\Contracts\AbstractProductB;

/**
 * Each Concrete Factory has a corresponding product variant.
 */
class ConcreteFactory2 implements AbstractFactory
{
    public function createProductA(): AbstractProductA
    {
        return new ConcreteProductA2;
    }

    public function createProductB(): AbstractProductB
    {
        return new ConcreteProductB2;
    }
}
