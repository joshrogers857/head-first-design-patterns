<?php

namespace AbstractFactoryPattern;

require_once 'PizzaIngredientFactory.php';
require_once 'Dough.php';
require_once 'Sauce.php';
require_once 'Cheese.php';
require_once 'Veggies.php';
require_once 'Pepperoni.php';
require_once 'Clams.php';
require_once 'ThinCrustDough.php';
require_once 'MarinaraSauce.php';
require_once 'ReggianoCheese.php';
require_once 'Garlic.php';
require_once 'Onion.php';
require_once 'Mushroom.php';
require_once 'RedPepper.php';
require_once 'SlicedPepperoni.php';
require_once 'FreshClams.php';

final class NYPizzaIngredientFactory implements PizzaIngredientFactory
{
    function createDough(): Dough
    {
        return new ThinCrustDough();
    }

    function createSauce(): Sauce
    {
        return new MarinaraSauce();
    }

    function createCheese(): Cheese
    {
        return new ReggianoCheese();
    }

    /** @return Veggies[] */
    function createVeggies(): array
    {
        return [new Garlic(), new Onion(), new Mushroom(), new RedPepper()];
    }

    function createPepperoni(): Pepperoni
    {
        return new SlicedPepperoni();
    }

    function createClams(): Clams
    {
        return new FreshClams();
    }
}