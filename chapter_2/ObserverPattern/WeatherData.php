<?php

declare(strict_types=1);

namespace ObserverPattern;

require_once "Subject.php";

final class WeatherData implements Subject
{
    private array $observers = [];
    private float $temperature = 0.0;
    private float $humidity = 0.0;
    private float $pressure = 0.0;

    public function registerObserver(Observer $observer): void
    {
        $this->observers[] = $observer;
    }

    public function removeObserver(Observer $observer): void
    {
        $key = array_search($observer, $this->observers, true);

        if ($key !== false) {
            unset($this->observers[$key]);
        }
    }

    public function notifyObservers(): void
    {
        foreach( $this->observers as $observer ) {
            $observer->update();
        }
    }

    public function getTemperature(): float
    {
        return $this->temperature;
    }

    public function getHumidity(): float
    {
        return $this->humidity;
    }

    public function getPressure(): float
    {
        return $this->pressure;
    }

    public function setData(float $temperature, float $humidity, float $pressure): void
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        $this->measurementsChanged();
    }

    public function measurementsChanged(): void
    {
        $this->notifyObservers();
    }
}
