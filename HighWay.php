<?php

abstract class HighWay
{
        protected array $currentVehicles;
        protected int $nbLane;
        protected int $maxSpeed;

        public function __construct(array $currentVehicles,int $nbLane,int $maxSpeed)
        {

            $this->currentVehicles = $currentVehicles;
            $this->nbLane = $nbLane;
            $this->maxSpeed = $maxSpeed;
        }
        abstract public function addVehicles(Vehicle $vehicle);

    /**
     * @return int
     */
    public function getNbLane(): int
    {
        return $this->nbLane;
    }

    /**
     * @return int
     */
    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    /**
     * @return array
     */
    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }

    /**
     * @param int $nbLane
     */
    public function setNbLane(int $nbLane): void
    {
        $this->nbLane = $nbLane;
    }

    /**
     * @param int $maxSpeed
     */
    public function setMaxSpeed(int $maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }

    /**
     * @param array $currentVehicles
     */
    public function setCurrentVehicles(array $currentVehicles): void
    {
        $this->currentVehicles = $currentVehicles;
    }
}