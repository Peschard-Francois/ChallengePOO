<?php

class Car
{
    private int $nbWheels = 4;
    private int $currentSpeed = 0;
    private int $energyLevel = 40;
    private string $color;
    private int $nbSeats;
    private string $energy;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->energy = $energy;
        $this->nbSeats = $nbSeats;
        $this->color = $color;
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    public function forward() : string
    {
        $this->currentSpeed = 130;
        return 'Go !';
    }
    public function brake() : string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }
    public function start() : string
    {
        $result = "";
        return $this->$result;
    }
    public function getNbWheels() : int
    {
        return $this->nbWheels;
    }

    public function getCurrentSpeed() : int
    {
        return $this->currentSpeed;
    }
    public function getColor() : string
    {
        return $this->color;
    }
    public function getNbSeats() : int
    {
        return $this->nbSeats;
    }
    public function getEnergy() : string
    {
        return $this->energy;
    }
    public function getEnergyLevel() : int
    {
        return $this->energyLevel;
    }

}