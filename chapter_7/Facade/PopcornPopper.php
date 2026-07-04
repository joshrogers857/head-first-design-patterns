<?php

namespace Facade;

final readonly class PopcornPopper
{
    public function on(): void
    {
        printf("Popcorn Popper on\n");
    }

    public function off(): void
    {
        printf("Popcorn Popper off\n");
    }

    public function pop(): void
    {
        printf("Popcorn Popper popping popcorn!\n");
    }
}