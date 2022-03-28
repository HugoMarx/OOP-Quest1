<?php

class Car
{
    private int $nbWheels;
    private int $currentSpeed;
    private  string $color;
    private  int $nbSeats;
    private string $energy;
    private int $energyLevel = 5;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }


    public function forward(): string
    {
        if ($this->energyLevel > 0) {
            $this->currentSpeed = 10;
            return 'Let\'s go ! <br> ';
        } else {
            return 'You need fuel to ride. <br>';
        }
    }

    public function brake(): string
    {
        $alert = '';
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $alert .= 'braking! <br> ';
        }
        return $alert . 'Your are not moving. <br>';
    }

    public function start(): string
    {
        return 'Engine started. <br>';
    }

    public function getNbWheels(): int
    {
        return $this->NbWheels;
    }

    public function getCurrentSpeed(): int
    {
        return $this->CurrentSpeed;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getNbSeats(): int
    {
        return $this->NbSeats;
    }

    public function getEnergy(): string
    {
        return $this->Energy;
    }

    public function getEnergyLevel(): int
    {
        return $this->EnergyLevel;
    }
}
