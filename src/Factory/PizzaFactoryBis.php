<?php

namespace App\Factory;

use App\Entity\Pizza;

class PizzaFactoryBis implements PizzaFactoryInterface
{
    public function create($name, $ingredients)
    {
        $pizza = new Pizza();

        $pizza
            ->setName($name)
        ;

        return $pizza;
    }
}