<?php

namespace Facade;

final readonly class Amplifier
{
    public function on(): void
    {
        printf("Amplifier is on\n");
    }

    public function off(): void
    {
        printf("Amplifier is off\n");
    }

    public function setStreamingPlayer(StreamingPlayer $streamingPlayer): void
    {
        printf("Amplifier setting streaming player to \"%s\"\n", get_class($streamingPlayer));
    }

    public function setStereoSound(): void
    {
        printf("Amplifier stereo sound on\n");
    }

    public function setSurroundSound(): void
    {
        printf("Amplifier surround sound on (5 speakers, 1 subwoofer)\n");
    }

    public function setTuner(Tuner $tuner): void
    {
        printf("Amplifier setting tuner to \"%s\"\n", get_class($tuner));
    }

    public function setVolume(int $level): void
    {
        printf("Amplifier setting volume to %d\n", $level);
    }
}