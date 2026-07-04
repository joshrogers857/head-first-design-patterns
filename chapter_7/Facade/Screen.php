<?php

namespace Facade;

final readonly class Screen
{
    public function up(): void
    {
        printf("Theater Screen going up\n");
    }

    public function down(): void
    {
        printf("Theater Screen going down\n");
    }
}