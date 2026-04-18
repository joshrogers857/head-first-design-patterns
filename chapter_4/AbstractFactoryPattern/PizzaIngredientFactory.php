<?php

namespace AbstractFactoryPattern;

interface PizzaIngredientFactory
{
    function createDough(): Dough;

    function createSauce(): Sauce;

    function createCheese(): Cheese;

    /** @return Veggies[] */
    function createVeggies(): array;

    function createPepperoni(): Pepperoni;

    function createClams(): Clams;
}