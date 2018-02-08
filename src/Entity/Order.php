<?php

namespace App\Entity;

class Order
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var array
     */
    private $pizzas;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Order
     */
    public function setId(int $id): Order
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return array
     */
    public function getPizzas(): array
    {
        return $this->pizzas;
    }

    /**
     * @param array $pizzas
     * @return Order
     */
    public function setPizzas(array $pizzas): Order
    {
        $this->pizzas = $pizzas;
        return $this;
    }
}