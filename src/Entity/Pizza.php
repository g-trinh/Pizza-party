<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Pizza
 * @package App\Entity
 *
 * @ORM\Entity(repositoryClass="App\Repository\PizzaRepository")
 * @ORM\Table(name="pizza")
 */
class Pizza
{
    /**
     * @var int
     *
     * @ORM\Id()
     * @ORM\Column(name="id")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name")
     */
    private $name;

    /**
     * @var array
     */
    private $ingredients;

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Pizza
     */
    public function setName(string $name): Pizza
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return array
     */
    public function getIngredients(): ?array
    {
        return $this->ingredients;
    }

    /**
     * @param array $ingredients
     * @return Pizza
     */
    public function setIngredients(array $ingredients): Pizza
    {
        $this->ingredients = $ingredients;
        return $this;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Pizza
     */
    public function setId(int $id): Pizza
    {
        $this->id = $id;
        return $this;
    }
}