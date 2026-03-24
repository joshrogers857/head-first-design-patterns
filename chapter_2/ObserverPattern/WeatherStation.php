<?php

declare(strict_types=1);

namespace ObserverPattern;

require_once "WeatherData.php";
require_once "CurrentConditionsDisplay.php";
require_once "StatisticsDisplay.php";
require_once "ForecastDisplay.php";

final readonly class WeatherStation
{
    public function init(): void
    {
        $weatherData = new WeatherData();
        $currentConditionsDisplay = new CurrentConditionsDisplay($weatherData);
        $statisticsDisplay = new StatisticsDisplay($weatherData);
        $forecastDisplay = new ForecastDisplay($weatherData);

        $weatherData->setData(80, 65, 30.4);
        $weatherData->setData(82, 70, 29.2);
        $weatherData->setData(78, 90, 29.2);
    }
}