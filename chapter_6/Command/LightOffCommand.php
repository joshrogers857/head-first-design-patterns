<?php

namespace Command;

require_once __DIR__ . '/Command.php';

final readonly class LightOffCommand implements Command
{
    public function __construct(private Light $light)
    {
    }

    public function execute(): void
    {
        $this->light->off();
    }

    public function undo(): void
    {
        $this->light->on();
    }
}