<?php

require_once('Vehicule.php');

class Truck extends Vehicule
{
    private string $energy;
    private int $storageCapacity;
    private int $payload = 0;


    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->storageCapacity = $storageCapacity;
    }

    public function getStorage(): int
    {
        return $this->storageCapacity;
    }

    public function setStorage(int $storageCapacity): void
    {
        $this->storageCapacity = $storageCapacity;
    }

    public function getPayload(): int
    {
        return $this->payload;
    }

    public function setPayload(int $payload)
    {
        $this->payload = $payload;
    }


    public function getFilling(): string
    {
        if ($this->payload < $this->storageCapacity) {
            return 'in filling';
        } elseif ($this->payload == $this->storageCapacity) {
            return 'full';
        } else {
            return 'Payload too large';
        }
    }
}
