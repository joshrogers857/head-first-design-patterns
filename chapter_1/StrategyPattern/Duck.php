<?php

declare(strict_types=1);

namespace SimUDuck;

require_once "FlyBehaviour.php";
require_once "QuackBehaviour.php";

abstract class Duck {
    
    public FlyBehaviour $flyBehaviour;
    public QuackBehaviour $quackBehaviour;

    public function __construct() {}

    public function setFlyBehaviour(FlyBehaviour $flyBehaviour): void
    {
        $this->flyBehaviour = $flyBehaviour;
    }

    public function setQuackBehaviour(QuackBehaviour $quackBehaviour): void
    {
        $this->quackBehaviour = $quackBehaviour;
    }

    abstract public function display(): void;

    public function performFly(): void
    {
        $this->flyBehaviour->fly();
    }

    public function performQuack(): void
    {
        $this->quackBehaviour->quack();
    }

    public function swim(): void
    {
        print("All ducks float, even decoys!");
    }
}
