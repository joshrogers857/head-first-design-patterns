<?php

namespace Facade;

final readonly class HomeTheaterFacade {
    public function __construct(
        private PopcornPopper $popper,
        private TheaterLights $theaterLights,
        private Screen $screen,
        private Projector $projector,
        private StreamingPlayer $player,
        private Amplifier $amplifier,
        private Tuner $tuner
    ) {
    }

    public function watchMovie(string $movie): void
    {
        printf("Get ready to watch a movie...\n");
        $this->popper->on();
        $this->popper->pop();
        $this->theaterLights->dim(10);
        $this->screen->down();
        $this->projector->on();
        $this->projector->setInput($this->player);
        $this->projector->wideScreenMode();
        $this->tuner->setAmplifier($this->amplifier);
        $this->amplifier->on();
        $this->amplifier->setStreamingPlayer($this->player);
        $this->amplifier->setTuner($this->tuner);
        $this->amplifier->setSurroundSound();
        $this->amplifier->setVolume(5);
        $this->player->on();
        $this->player->play($movie);
    }

    public function endMovie(): void
    {
        printf("Shutting movie theater down...\n");
        $this->popper->off();
        $this->theaterLights->on();
        $this->screen->up();
        $this->projector->off();
        $this->amplifier->off();
        $this->player->stop();
        $this->player->off();
    }
}