<?php

declare(strict_types=1);

namespace SimUDuck;

require_once "Mallard.php";

final readonly class MiniDuckSimulator {
    public function __construct()
    {
        $mallard = new Mallard();
        print("\n");
        $mallard->performQuack();
        print("\n");
        $mallard->performFly();
    }
}