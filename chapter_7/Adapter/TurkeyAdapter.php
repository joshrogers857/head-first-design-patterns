<?php

namespace Adapter;

final readonly class TurkeyAdapter implements Duck
{
    public function __construct(
        private Turkey $turkey,
    ) {}

    public function quack(): void
    {
        $this->turkey->gobble();
    }

    public function fly(): void
    {
        // Turkeys fly in short spurts, so we need to call fly() multiple times to simulate a duck's flight
        for ($i = 0; $i < 5; $i++) {
            $this->turkey->fly();
        }
    }
}