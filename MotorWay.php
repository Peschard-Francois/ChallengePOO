<?php
require_once 'HighWay.php';


final class MotorWay extends HighWay
{
    protected array $currentVehicles;
    protected int $maxSpeed;
    protected int $nbLane;

    public function __construct(array $currentVehicles= [], int $maxSpeed= 130, int $nbLane= 4)
    {
        parent::__construct($currentVehicles, $maxSpeed, $nbLane);
    }

    public function addVehicles(Vehicle $vehicle) : void
    {
        if($vehicle instanceof Car)
        {
            $this->currentVehicles[] = $vehicle;
        }
        $this->currentVehicles[] = $vehicle;
    }
}