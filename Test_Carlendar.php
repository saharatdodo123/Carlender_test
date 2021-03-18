<?php
 include "Carlendar.php";

 use PHPUnit\Framework\TestCase;

 class Test_Carlendar extends TestCase{
     private $carlendar;

     public function setUp():void{
         $this->carlendar = new Carlendar();
     }

     public function testday1(){
         $this->assertEquals('Wednesday',$this->carlendar->showDay(03,02));
     }

     public function testday2(){
        $this->assertEquals('Friday',$this->carlendar->showDay(15,01));
    }

    public function testday3(){
        $this->assertEquals('Tuesday',$this->carlendar->showDay(20,04));
    }
 }