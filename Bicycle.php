<?php
require_once 'Vehicule.php';

class Bicycle extends Vehicule
{

    protected  int $nbWheels;

    public function __construct(protected string $color,  protected int $currentSpeed,  protected int $nbSeats)
    {
        $this->color = $color;
        $this->currentSpeed = $currentSpeed;
        $this->nbSeats = $nbSeats;
    }

    public function forward(): string
    {
        $this->currentSpeed = 15;

        return "Go !";
    }

    public  function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    public function dump()
    {
        var_dump($this);
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getColor(): string
    {
        return $this->color;
    }
}
