<?php

namespace Command;

final readonly class NullCommand implements Command
{
    public function execute(): void
    {
        // Do nothing
    }

    public function undo(): void
    {
        // Do nothing
    }
}