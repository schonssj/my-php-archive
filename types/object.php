<?php

/*
    An object is a entity who have a defined behavior by his methods and properties.
    To create a object, the operator 'new' must be used.
*/

class Computer {
    public $cpu;

    function powerOn() {
        echo "Turn on the computer at {$this->cpu}... ";
    }    
}
// Instance of a object.
$pc = new Computer();
$pc->cpu = "500Mhz";
$pc->powerOn();
