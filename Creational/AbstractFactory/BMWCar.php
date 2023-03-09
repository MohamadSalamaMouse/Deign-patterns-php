<?php

namespace Creational\AbstractFactory;

class BMWCar implements CarInterface
{
    private $price;
    public function __construct($price)
    {
        $this->price=$price;
    }

    public function Cal_CarPrice()
    {
        // TODO: Implement Cal_CarPrice() method.
        return $this->price+280000;
    }
}