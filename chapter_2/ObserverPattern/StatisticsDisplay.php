<?php

declare(strict_types=1);

namespace ObserverPattern;

require_once "Observer.php";
require_once "DisplayElement.php";

final class StatisticsDisplay implements Observer, DisplayElement
{
    private array $temperatureMeasurements = [];

    public function __construct(
        private WeatherData $weatherData
    ) {
        $weatherData->registerObserver($this);
    }

    public function update(): void
    {
        $this->temperatureMeasurements[] = $this->weatherData->getTemperature();
        $this->display();
    }

    public function avgTemp(): float
    {
        return (array_sum($this->temperatureMeasurements) / count($this->temperatureMeasurements));
    }

    public function maxTemp(): float
    {
        return max($this->temperatureMeasurements);
    }

    public function minTemp(): float
    {
        return min($this->temperatureMeasurements);
    }

    public function display(): void
    {
        print("Avg/Max/Min temperature = {$this->avgTemp()}/{$this->maxTemp()}/{$this->minTemp()}\n");
    }
}