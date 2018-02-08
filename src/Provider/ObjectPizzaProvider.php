<?php

namespace App\Provider;

use App\Entity\Pizza;

class ObjectPizzaProvider implements PizzaProviderInterface
{
    public function getAll(): array
    {
        return [
            new Pizza(),
            new Pizza(),
        ];
    }
}