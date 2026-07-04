<?php

namespace Facade;

final readonly class Tuner {
    public function on(): void
    {
        printf("Tuner is on\n");
    }

    public function off(): void
    {
        printf("Tuner is off\n");
    }

    public function setAm(): void
    {
        printf("Tuner setting AM mode\n");
    }

    public function setFm(): void
    {
        printf("Tuner setting FM mode\n");
    }

    public function setFrequency(float $frequency): void
    {
        printf("Tuner setting frequency to %.1f\n", $frequency);
    }

    public function setAmplifier(Amplifier $amplifier): void
    {
        printf("Tuner setting amplifier to \"%s\"\n", get_class($amplifier));
    }
}