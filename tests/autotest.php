<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of autotest
 *
 * @author root
 */
require 'Auto.php';
class autoTest extends PHPUNIT_Framework_testcase {
    public $autoInstance;
    //put your code here
    
    public function setUp(){
        $this->autoInstance = new Auto();
}
    public function testIfAccelerates(){
        $this->autoInstance->Accelerate();
        assert(10, $this->autoInstance->getSpeed());
    }
}
