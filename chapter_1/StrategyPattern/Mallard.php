<?php

declare(strict_types=1);

namespace SimUDuck;

require_once "Duck.php";
require_once "Quack.php";
require_once "FlyWithWings.php";

final class Mallard extends Duck {

    public function __construct()
    {
        $this->quackBehaviour = new Quack();
        $this->flyBehaviour = new FlyWithWings();

        return parent::__construct();
    }

    public function display(): void
    {
        print("I'm a real Mallard duck");
    }
}