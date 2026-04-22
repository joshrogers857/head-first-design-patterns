<?php

declare(strict_types=1);

namespace Singleton;

enum SingletonEnum
{
    case INSTANCE;

    public function printStatus(): void
    {
        print("SingletonEnum instance is working!\n");
    }
}