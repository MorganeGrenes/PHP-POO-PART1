<?php

class Car {
    private $nbWheels;
    private $currentSpeed;
    private $color;
    private $nbSeats;
    private $energy;
    private $energyLevel;
    
    public function __construct(string $color, int $nbSeats, string $energy){
        $this->color = $color;   
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;

    }
    public function getColor(): string {
       return $this->color;
    }
    public function forward(){
        $this->currentSpeed = 15;
    
        return "Go !";
    }
    public function brake(){
        $sentence = "";
        while ($this->currentSpeed > 0){
            $this->currentSpeed--;
            $sentence .= 'Slow down ! ';
        }
        $sentence .= " I'm stopped !";
        return $sentence; 
    }
    public function start(){
        $sentence = "";
        while($this->currentSpeed == 0){
            $this->currentSpeed++;
            $sentence .= 'Here we go !';
        }
        return $sentence;
    }
    public function getNbWheels(){
        return $this->nbWheels;
    }
    public function getCurrentSpeed(){
        return $this->currentSpeed;
    }
    public function setCurrentSpeed($speed){
        $this->currentSpeed = $speed;
    }
    public function getNbSeats(){
        return $this->nbSeats;
    }
    public function getEnergy(){
        return $this->energy;
    }
    public function getEnergyLevel(){
        return $this->energyLevel;
    }
} 
