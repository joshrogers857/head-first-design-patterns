<?php

namespace Adapter;

require_once 'Duck.php';

final readonly class MallardDuck implements Duck
{
    public function quack(): void
    {
        print("Quack\n");
    }

    public function fly(): void
    {
        print("I'm flying\n");
    }
}