<?php

declare(strict_types=1);

namespace SimUDuck;

require_once "QuackBehaviour.php";

final readonly class Squeak implements QuackBehaviour {
    public function quack(): void
    {
        print("Squeak");
    }
}