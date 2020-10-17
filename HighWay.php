<?php
abstract class HighWay{
    protected $currentVehicles;
    protected $nbLane;
    protected $maxSpeed;


    abstract function addVehicle(Vehicle){
        
    }
}