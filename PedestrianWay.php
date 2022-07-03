<?php
require_once 'HighWay.php';
final class PedestrianWay extends HighWay
{
    protected array $currentVehicles;
    protected int $nbLane;
    protected int $maxSpeed;

    public function __construct(array $currentVehicles = [], int $nbLane = 1, int $maxSpeed = 10)
    {
        parent::__construct($currentVehicles, $nbLane, $maxSpeed);
    }
    public function addVehicles(Vehicle $vehicle)
    {
        if($vehicle instanceof Bicycle OR $vehicle instanceof Skateboard){
            $this->currentVehicles[] = $vehicle;
        }

    }
}