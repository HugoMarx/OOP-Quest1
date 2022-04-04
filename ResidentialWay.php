<?php

require_once 'HighWay.php';

final class ResidentialWay extends HighWay
{
    public const NB_LANE = 2;
    public const MAX_SPEED = 50;

    public function __construct(Vehicule $currentVehicles, int $nbLane = self::NB_LANE, $maxSpeed = self::MAX_SPEED)
    {
        parent::__construct($currentVehicles, $nbLane, $maxSpeed);
    }


    public function addVehicle(Vehicule $vehicle)
    {
        $this->currentVehicles[] = $vehicle;
    }
}
