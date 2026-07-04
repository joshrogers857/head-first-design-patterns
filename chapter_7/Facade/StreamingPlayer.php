<?php

namespace Facade;

final readonly class StreamingPlayer {

    public function on(): void
    {
        printf("Streaming Player is on\n");
    }

    public function off(): void
    {
        printf("Streaming Player is off\n");
    }

    public function pause(): void
    {
        printf("Streaming Player paused\n");
    }

    public function play(string $movie): void
    {
        printf("Streaming Player playing \"%s\"\n", $movie);
    }

    public function stop(): void
    {
        printf("Streaming Player stopped\n");
    }
}