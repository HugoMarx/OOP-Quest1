<?php

require_once 'HighWay.php';

final class MotorWay extends HighWay
{
    public const NB_LANE = 4;
    public const MAX_SPEED = 130;

    public function __construct(Vehicule $currentVehicles, int $nbLane = self::NB_LANE, $maxSpeed = self::MAX_SPEED)
    {
        parent::__construct($currentVehicles, $nbLane, $maxSpeed);
    }

    public function addVehicle(Vehicule $vehicle)
    {
        if ($vehicle instanceof Bicycle || $vehicle instanceof Skateboard){
            return '<h2>'.get_class($vehicle).' not allowed on motorway </h2>';
        } else {
            $this->currentVehicles[] = $vehicle;
        }
    }
}
