<?php
class Bicycle{
    private $color;
    private $currentSpeed;
    private $nbSeats = 1;
    private $nbWheels = 2;

    public function getForward()
    {
        $this->currentSpeed = 15;
    
        return "Go !";
    }

    public function getBrake(): string{
        $sentence = "";
        while ($this->currentSpeed > 0){
            $this->currentSpeed--;
            $sentence .= 'Brake !!!';
        }
        $sentence .= "I'm stopped !";
        return $sentence; 
    }

    public function getColor(): string
    {
        return $this->color;
    }
    public function setColor(string $color): void{
        $this->color = $color;
    }
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }
    public function setCurrentSpeed(int $currentSpeed): void{
        if($currentSpeed >= 0){
            $this->currentSpeed = $currentSpeed;
        }
    }
}