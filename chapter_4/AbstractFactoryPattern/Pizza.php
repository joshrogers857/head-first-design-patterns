<?php

namespace AbstractFactoryPattern;

abstract class Pizza
{
    protected String $name;
    protected Dough $dough;
    protected Sauce $sauce;
    /** @var Veggies[] */
    protected array $veggies = [];
    protected Cheese $cheese;
    protected Pepperoni $pepperoni;
    protected Clams $clam;
    protected PizzaIngredientFactory $ingredientFactory;

    public abstract function prepare();

    public function bake(): void
    {
        echo "Baking for 25 minutes at 350\n";
    }

    public function cut(): void
    {
        echo "Cutting the pizza into diagonal slices\n";
    }

    public function box(): void
    {
        echo "Placing pizza in official PizzaStore box\n";
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function __toString(): string
    {
        $result = "---- " . $this->name . " ----\n";
        if ($this->dough) {
            $result .= $this->dough . "\n";
        }
        if ($this->sauce) {
            $result .= $this->sauce . "\n";
        }
        if (!empty($this->veggies)) {
            $result .= implode(", ", $this->veggies) . "\n";
        }
        if ($this->cheese) {
            $result .= $this->cheese . "\n";
        }
        if ($this->pepperoni) {
            $result .= $this->pepperoni . "\n";
        }
        if ($this->clam) {
            $result .= $this->clam . "\n";
        }
        return $result;
    }
}