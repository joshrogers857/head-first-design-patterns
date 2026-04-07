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
        print("Preparing " . $this->name);
        print("Tossing dough...");
        print("Adding sauce...");
        print("Adding toppings: ");
        foreach($this->toppings as $topping) {
            print("  " . $topping);
        }
    }

    public function bake(): void
    {
        print("Bake for 25 minutes at 350");
    }

    public function cut(): void
    {
        print("Cutting the pizza into diagonal slices");
    }

    public function box(): void
    {
        print("Placing the pizza into an official PizzaStore box");
    }

    public function getName(): string
    {
        return $this->name;
    }
}