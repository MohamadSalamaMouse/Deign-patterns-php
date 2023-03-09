<?php

namespace Creational\AbstractFactory;

class CarAbstractFactory
{
    private $price;
    private $tax=1000;
public function __construct($price)
{
   $this->price=$price;
}
public function CreateBMWCar(): BMWCar
{
    return new BMWCar($this->price);
}
public function CreateBenzCar(): BenzCar
{
    return new BenzCar($this->price,$this->tax);

}
}