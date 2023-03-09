<?php

namespace test;

use Creational\AbstractFactory\BMWCar;
use Creational\AbstractFactory\CarAbstractFactory;
use PHPUnit\Framework\TestCase;

class AbstractFactorTest extends TestCase
{
    public function testcanCreateBMW(){
        $carFactory=new CarAbstractFactory(200000);
      $mycar=  $carFactory->CreateBMWCar();
      $this->assertInstanceOf(BMWCar::class,$mycar);
    }


}