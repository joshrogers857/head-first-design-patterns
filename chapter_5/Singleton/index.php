<?php

declare(strict_types=1);

namespace Singleton;

require_once __DIR__ . '/Singleton.php';
require_once __DIR__ . '/SingletonEnum.php';

$singleton = Singleton::getInstance();
$singleton->printStatus();

$singletonEnum = SingletonEnum::INSTANCE;
$singletonEnum->printStatus();
