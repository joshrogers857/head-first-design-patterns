<?php

declare(strict_types=1);

namespace SimUDuck;

require_once "FlyBehaviour.php";

final readonly class FlyNoWay implements FlyBehaviour {
    public function fly(): void
    {
        print("I can't fly");
    }
}