<?php
require_once 'HighWay.php';
final class MotorWay extends HighWay
{
    protected array $currentVehicles;
    protected int $nbLane;
    protected int $maxSpeed;

    public function __construct(array $currentVehicles= [], int $nbLane = 4, int $maxSpeed = 130)
    {
        parent::__construct($currentVehicles, $nbLane, $maxSpeed);
    }

    public function addVehicles(Vehicle $vehicle)
    {
        $this->currentVehicles[] = $vehicle;
    }
}