<?php

namespace Command;

require_once __DIR__ . '/Command.php';

final readonly class LightOnCommand implements Command
{
    public function __construct(private Light $light)
    {
    }

    public function execute(): void
    {
        $this->light->on();
    }

    public function undo(): void
    {
        $this->light->off();
    }
}