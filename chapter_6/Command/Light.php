<?php

namespace Command;

final readonly class Light
{
    public function __construct(private string $name)
    {
    }

    public function on(): void
    {
        echo $this->name . "Light is on\n";
    }

    public function off(): void
    {
        echo $this->name . "Light is off\n";
    }
}