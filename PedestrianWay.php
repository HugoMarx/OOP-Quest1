<?php

require_once 'HighWay.php';

final class PredestrianWay extends HighWay
{

    public const NB_LANE = 1;
    public const MAX_SPEED = 10;

    public function __construct( Vehicule $currentVehicles, int $nbLane = self::NB_LANE, $maxSpeed = self::MAX_SPEED)
    {
        parent::__construct($currentVehicles, $nbLane, $maxSpeed);
    }


    public function addVehicle(Vehicule $vehicle)
    {
        if ($vehicle instanceof Bicycle || $vehicle instanceof Skateboard) {
            $this->currentVehicles[] = $vehicle;
        } else {
            return '<h2>'.get_class($vehicle) . ' not allowed on pedestrian way </h2>';
        }
    }
}
