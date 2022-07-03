<?php
require_once 'Vehicle.php';
class Truck extends Vehicle
{
    private string $energy;
    public int $energyLevel;
    private int $storageCapacity;
    private int $stock = 0;

    public function __construct(string $color, int $nbSeats,string $energy, int $storageCapacity)
    {
             parent::__construct($color, $nbSeats);
             $this->energy = $energy;
             $this->storageCapacity = $storageCapacity;
    }

    public function Capacity($stock): String
    {
        if ($stock != $this->storageCapacity)
        {
            $result = "in filling";
        }else{
            $result = "Full";
        }
        return $result;
    }

    /**
     * @return int
     */
    public function getStorageCapacity(): int
    {
        return $this->storageCapacity;
    }

    /**
     * @return int
     */
    public function getStock(): int
    {
        return $this->stock;
    }

    /**
     * @return int
     */
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    /**
     * @param int $storageCapacity
     */
    public function setStorageCapacity(int $storageCapacity): void
    {
        $this->storageCapacity = $storageCapacity;
    }

    /**
     * @param int $stock
     */
    public function setStock(int $stock): void
    {
        $this->stock = $stock;
    }

    /**
     * @param int $energyLevel
     */
    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }


}