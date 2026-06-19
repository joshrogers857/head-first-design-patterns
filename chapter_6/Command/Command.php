<?php

namespace Command;

interface Command
{
    public function execute();

    public function undo();
}
