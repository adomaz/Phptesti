<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Auto
 *
 * @author root
 */
class auto {
    //put your code here
    private $Colour = "Blue";
    private $speed = 0;
    private $maxSpeed = 200;
    
    public function getColour(){
    return $this->Colour;
    }
    public function setColour($colour){
        $this->Colour = $colour;
    }
    public function getSpeed() {
        return $this->speed;
    }
    public function getMaxSpeed(){
        return $this->maxSpeed;
    }

    public function Accelerate(){
        if($this->getSpeed() + 10 > $this->getMaxSpeed()){
            $this->speed = $this->getMaxSpeed();
        }
        else{
            $this->speed = $this->speed + 10;
        }
    }
    public function Slowdown(){
        if($this->speed - 10 < 0){
            $this->speed = 0;
        }
        else{
        $this->speed = $this->speed - 10;
        }
    }
    public function PedalToTheMetal(){
        $this->speed = $this->maxSpeed;
    }
    
}
