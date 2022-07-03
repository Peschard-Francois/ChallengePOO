<?php

require_once 'HighWay.php';
final class ResidentialWay extends HighWay
{
    public array $currentVehicles;
    public int $maxSpeed;
    public int $nbLane;

    public function __construct(array $currentVehicles = [], int $maxSpeed = 50, int $nbLane = 2)
    {
        parent::__construct($currentVehicles, $maxSpeed, $nbLane);
    }

    public function addVehicles(Vehicle $vehicle) : void
    {
        $this->currentVehicles[] = $vehicle;
    }
}