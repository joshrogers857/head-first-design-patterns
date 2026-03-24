<?php

declare(strict_types=1);

namespace ObserverPattern;

require_once "WeatherStation.php";

$weatherStation = new WeatherStation();

$weatherStation->init();
