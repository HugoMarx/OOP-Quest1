<?php

abstract class HighWay
{

protected array $currentVehicles = [];
protected int $nbLane;
protected int $maxSpeed;

    public function __construct(string $vehicle, int $nbLane, int $maxSpeed)
    {
        $this->currentVehicles = array_push($currentvehicle, $vehicle);
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }

    public function setCurrentVehicles(string $vehicle): void
    {
        $this->currentVehicles = array_push($currentvehicle, $vehicle);
    }

    public function getNbLane(): int
    {
        return $this->nbLane;
    }

    public function setNbLane(int $nbLane): void
    {
        $this->nbLane = $nbLane;
    }

    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    public function setMaxSpeed(int $maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }

    public function addVehicle(){
        
    }
}
