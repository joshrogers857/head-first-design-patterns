<?php

declare(strict_types=1);

namespace ObserverPattern;

interface Observer {
    public function update(): void;
}