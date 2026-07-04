<?php

namespace Facade;

final readonly class Projector {
    public function on(): void
    {
        printf("Projector is on\n");
    }

    public function off(): void
    {
        printf("Projector is off\n");
    }

    public function tvMode(): void
    {
        printf("Projector in tv mode (4x3 aspect ratio)\n");
    }

    public function wideScreenMode(): void
    {
        printf("Projector in widescreen mode (16x9 aspect ratio)\n");
    }

    public function setInput(StreamingPlayer $streamingPlayer): void
    {
        printf("Projector setting input to \"%s\"\n", get_class($streamingPlayer));
    }
}