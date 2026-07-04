<?php

namespace Facade;

final readonly class TheaterLights
{
    public function on(): void
    {
        printf("Theater Ceiling Lights are on\n");
    }

    public function off(): void
    {
        printf("Theater Ceiling Lights are off\n");
    }

    public function dim(int $level): void
    {
        printf("Theater Ceiling Lights dimming to %d%%\n", $level);
    }
}