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
require 'auto.php';
class autoTest extends PHPUNIT_Framework_testcase {
    public $autoInstance;
    //put your code here
    
    public function setUp(){
        $this->autoInstance = new auto();
}
    public function testIfAccelerates(){
        $this->autoInstance->Accelerate();
        $this->assertEquals(10, $this->autoInstance->getSpeed());
    }
}
