<?php

namespace App\Provider;

use App\Repository\PizzaRepository;

class DoctrinePizzaProvider implements PizzaProviderInterface
{
    /**
     * @var PizzaRepository
     */
    private $pizzaRepository;

    /**
     * DoctrinePizzaProvider constructor.
     * @param PizzaRepository $pizzaRepository
     */
    public function __construct(PizzaRepository $pizzaRepository)
    {
        $this->pizzaRepository = $pizzaRepository;
    }

    public function getAll(): array
    {
        return $this->pizzaRepository->findAll();
    }
}