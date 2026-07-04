<?php

namespace Adapter;

final readonly class DuckAdapter implements Turkey
{
    public function __construct(
        private Duck $duck,
    ) {}

    public function gobble(): void
    {
        $this->duck->quack();
    }

    public function fly(): void
    {
        // Ducks fly much further than turkeys, so we fly on average 1/5 times this method is called
        if (rand(1, 5) === 1) {
            $this->duck->fly();
        }
    }
}