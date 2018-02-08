<?php

namespace App\Provider;

use App\Factory\PizzaFactoryInterface;

class FactoryPizzaProvider implements PizzaProviderInterface
{
    /**
     * @var PizzaFactoryInterface
     */
    private $pizzaFactory;

    /**
     * FactoryPizzaProvider constructor.
     * @param PizzaFactoryInterface $pizzaFactory
     */
    public function __construct(PizzaFactoryInterface $pizzaFactory)
    {
        $this->pizzaFactory = $pizzaFactory;
    }

    public function getAll(): array
    {
        return [
            $this->pizzaFactory->create('Pepperoni', []),
            $this->pizzaFactory->create('Queen', []),
        ];
    }
}