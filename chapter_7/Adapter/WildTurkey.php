<?php

namespace Adapter;

require_once 'Turkey.php';

final readonly class WildTurkey implements Turkey
{
    public function gobble(): void
    {
        print("Gobble gobble\n");
    }

    public function fly(): void
    {
        print("I'm flying a short distance\n");
    }
}