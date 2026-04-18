<?php

namespace AbstractFactoryPattern;

final class ClamPizza extends Pizza
{
    public function __construct(
        PizzaIngredientFactory $ingredientFactory,
    ) {
        $this->ingredientFactory = $ingredientFactory;
    }

    public function prepare(): void
    {
        echo "Preparing " . $this->name . "\n";
        $this->dough = $this->ingredientFactory->createDough();
        $this->sauce = $this->ingredientFactory->createSauce();
        $this->cheese = $this->ingredientFactory->createCheese();
        $this->clam = $this->ingredientFactory->createClams();
    }
}