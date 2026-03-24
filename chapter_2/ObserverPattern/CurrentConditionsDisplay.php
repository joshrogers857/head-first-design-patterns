<?php

declare(strict_types=1);

namespace ObserverPattern;

require_once "Observer.php";
require_once "DisplayElement.php";

final class CurrentConditionsDisplay implements Observer, DisplayElement
{
    private float $temperature = 0.0;
    private float $humidity = 0.0;

    public function __construct(
        private WeatherData $weatherData
    ) {
        $weatherData->registerObserver($this);
    }

    public function update(): void
    {
        $this->temperature = $this->weatherData->getTemperature();
        $this->humidity = $this->weatherData->getHumidity();
        $this->display();
    }

    public function display(): void
    {
        print("Current conditions: {$this->temperature}F degrees and {$this->humidity}% humidity\n");
    }
}