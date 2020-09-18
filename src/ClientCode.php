<?php

namespace App;

use App\Conceptual\Strategy\ConcreteStrategyA;
use App\Conceptual\Strategy\ConcreteStrategyB;
use App\Conceptual\Strategy\Context;
use App\RealWorld\Order\OrderController;

function conceptualClientCode()
{
    /**
     * The client code picks a concrete strategy and passes it to the context. The
     * client should be aware of the differences between strategies in order to make
     * the right choice.
     */
    $context = new Context(new ConcreteStrategyA());
    echo "Client: Strategy is set to normal sorting.\n";
    $context->doSomeBusinessLogic();

    echo "\n";

    echo "Client: Strategy is set to reverse sorting.\n";
    $context->setStrategy(new ConcreteStrategyB());
    $context->doSomeBusinessLogic();
}

function realWorldClientCode()
{
    /**
     * The client code.
     */

    $controller = new OrderController();

    echo "Client: Let's create some orders\n";

    $controller->post("/orders", [
        "email" => "me@example.com",
        "product" => "ABC Cat food (XL)",
        "total" => 9.95,
    ]);

    $controller->post("/orders", [
        "email" => "me@example.com",
        "product" => "XYZ Cat litter (XXL)",
        "total" => 19.95,
    ]);

    echo "\nClient: List my orders, please\n";

    $controller->get("/orders");

    echo "\nClient: I'd like to pay for the second, show me the payment form\n";

    $controller->get("/order/1/payment/paypal");

    echo "\nClient: ...pushes the Pay button...\n";
    echo "\nClient: Oh, I'm redirected to the PayPal.\n";
    echo "\nClient: ...pays on the PayPal...\n";
    echo "\nClient: Alright, I'm back with you, guys.\n";

    $controller->get("/order/1/payment/paypal/return" . "?key=c55a3964833a4b0fa4469ea94a057152&success=true&total=19.95");
}
