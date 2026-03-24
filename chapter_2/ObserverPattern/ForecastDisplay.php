<?php

declare(strict_types=1);

namespace ObserverPattern;

require_once "Observer.php";
require_once "DisplayElement.php";

final class ForecastDisplay implements Observer, DisplayElement
{
    private float $previousTemperature = 0.0;
    private float $currentTemperature = 0.0;
    private string $message = '';

    public function __construct(
        private WeatherData $weatherData
    ) {
        $weatherData->registerObserver($this);
    }
    
    public function update(): void
    {
        $this->previousTemperature = $this->currentTemperature;
        $this->currentTemperature = $this->weatherData->getTemperature();
        
        if ($this->previousTemperature === $this->currentTemperature) {
            $this->message = "Forecast: More of the same";
        }

        if ($this->previousTemperature > $this->currentTemperature) {
            $this->message = "Forecast: Watch out for cooler, rainy weather";
        }

        if ($this->previousTemperature < $this->currentTemperature) {
            $this->message = "Forecast: Improving weather on the way!";
        }
        
        $this->display();
    }

    public function display(): void
    {
        print("{$this->message}\n");
    }
}