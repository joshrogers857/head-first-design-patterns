<?php

namespace Command;

require_once __DIR__ . '/Command.php';

final class CeilingFanOffCommand implements Command
{
    private readonly CeilingFan $ceilingFan;
    private int $prevSpeed;

    public function __construct(CeilingFan $ceilingFan)
    {
        $this->ceilingFan = $ceilingFan;
    }

    public function execute(): void
    {
        $this->prevSpeed = $this->ceilingFan->getSpeed();
        $this->ceilingFan->off();
    }

    public function undo(): void
    {
        if ($this->prevSpeed === CeilingFan::HIGH) {
            $this->ceilingFan->high();
        } elseif ($this->prevSpeed === CeilingFan::MEDIUM) {
            $this->ceilingFan->medium();
        } elseif ($this->prevSpeed === CeilingFan::LOW) {
            $this->ceilingFan->low();
        } else {
            $this->ceilingFan->off();
        }
    }
}