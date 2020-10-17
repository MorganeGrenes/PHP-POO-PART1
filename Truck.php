<?php
require_once 'vehicle.php';
class Truck extends Vehicle{
    private $storage;
    private $cargo = 0;

    public function __construct(int $storage, int $cargo, $color, $nbSeats, $energy){
        parent::__construct($color, $nbSeats, $energy);
        $this->storage = $storage;
        $this->cargo = $cargo;
    }
    public function getEmpty(): string
    {
        return $this->storage;

    }
    public function setEmpty($storage): string
    {
        $sentence = "";
        if($this->storage <= 15){
            $this->storage = $storage;
            $sentence = 'in filling';
        }else
        {
            $sentence = 'full';
        }
        return $sentence;
    }
}