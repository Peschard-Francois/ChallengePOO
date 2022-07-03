<?php
require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{
    protected array $currentVehicles ;
    protected int $maxSpeed ;
    protected int $nbLane;

    public function __construct(array $currentVehicles = [], int $maxSpeed = 10, int $nbLane= 1)
    {
        parent::__construct($currentVehicles, $maxSpeed, $nbLane);
    }

    public function addVehicles(Vehicle $vehicle) : void
    {
        if($vehicle instanceof Bicycle OR $vehicle instanceof Skateboard)
        {
            $this->currentVehicles[] = $vehicle;
        }
    }
}