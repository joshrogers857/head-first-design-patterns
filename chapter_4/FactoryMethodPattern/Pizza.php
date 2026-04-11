<?php

declare(strict_types=1);

namespace FactoryMethodPattern;

abstract class Pizza {
    public string $name;
    public string $dough;
    public string $sauce;
    public array $toppings = [];

    public function prepare(): void
    {
        print("Preparing {$this->name}\n");
        print("Tossing dough...\n");
        print("Adding sauce...\n");
        print("Adding toppings: \n");
        foreach($this->toppings as $topping) {
            print("\t$topping\n");
        }
    }

    public function bake(): void
    {
        print("Bake for 25 minutes at 350\n");
    }

    public function cut(): void
    {
        print("Cutting the pizza into diagonal slices\n");
    }

    public function box(): void
    {
        print("Placing the pizza into an official PizzaStore box\n");
    }

    public function getName(): string
    {
        return $this->name;
    }
}