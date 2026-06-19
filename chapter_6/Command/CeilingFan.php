<?php

namespace Command;

final class CeilingFan
{
    public const HIGH = 3;
    public const MEDIUM = 2;
    public const LOW = 1;
    public const OFF = 0;

    public function __construct(
        private readonly string $name,
        private int $speed = self::OFF,
    )
    {
    }

    public function high(): void
    {
        $this->speed = self::HIGH;
        echo $this->name . "Ceiling fan is on high\n";
    }

    public function medium(): void
    {
        $this->speed = self::MEDIUM;
        echo $this->name . "Ceiling fan is on medium\n";
    }

    public function low(): void
    {
        $this->speed = self::LOW;
        echo $this->name . "Ceiling fan is on low\n";
    }

    public function off(): void
    {
        $this->speed = self::OFF;
        echo $this->name . "Ceiling fan is off\n";
    }

    public function getSpeed(): int
    {
        return $this->speed;
    }
}