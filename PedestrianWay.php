<?php

require_once 'HighWay.php';

final class PredestrianWay extends HighWay
{

    protected array $currentVehicles = [];
    protected int $nbLane = 1;
    protected int $maxSpeed = 10;
}
