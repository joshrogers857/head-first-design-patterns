<?php

namespace Command;

require_once __DIR__ . '/NullCommand.php';

final class RemoteControl
{
    private array $onCommands;
    private array $offCommands;
    private Command $undoCommand;

    public function __construct()
    {
        for ($i = 0; $i < 4; $i++) {
            $this->onCommands[$i] = new NullCommand();
            $this->offCommands[$i] = new NullCommand();
        }
        $this->undoCommand = new NullCommand();
    }

    public function setCommand(int $slot, Command $onCommand, Command $offCommand): void
    {
        if ($slot < 0 || $slot >= 4) {
            throw new \InvalidArgumentException('Slot must be between 0 and 3.');
        }

        $this->onCommands[$slot] = $onCommand;
        $this->offCommands[$slot] = $offCommand;
    }

    public function onButtonWasPushed(int $slot): void
    {
        if ($slot < 0 || $slot >= 4) {
            throw new \InvalidArgumentException('Slot must be between 0 and 3.');
        }

        $this->onCommands[$slot]->execute();
        $this->undoCommand = $this->onCommands[$slot];
    }

    public function offButtonWasPushed(int $slot): void
    {
        if ($slot < 0 || $slot >= 4) {
            throw new \InvalidArgumentException('Slot must be between 0 and 3.');
        }

        $this->offCommands[$slot]->execute();
        $this->undoCommand = $this->offCommands[$slot];
    }

    public function undoButtonWasPushed(): void
    {
        $this->undoCommand->undo();
    }
}