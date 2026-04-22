<?php

declare(strict_types=1);

namespace Singleton;

class Singleton
{
    private static ?Singleton $instance = null;

    private function __construct()
    {}

    public static function getInstance(): Singleton
    {
        if (self::$instance === null) {
            self::$instance = new Singleton();
        }

        return self::$instance;
    }

    public function printStatus(): void
    {
        print("Singleton instance is working!\n");
    }
}