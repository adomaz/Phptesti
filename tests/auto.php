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
    
    public function getColour(){
    return $this->Colour;
    }
    public function setColour($colour){
        $this->Colour = $colour;
    }
    public function getSpeed() {
        return $this->speed;
               
    }
    public function Accelerate(){
        $this->speed = $this->speed + 10;
    }
    public function Slowdown(){
        $this->speed = $this->speed - 10;
    }
}
