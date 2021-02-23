<?php
abstract class Car
{
    public abstract function setCarColor($color);
}


class Ferrari extends Car {
    public function setCarColor($color)
    {
        echo $color;
    }
}

class Ford extends Car {
    public function setCarColor($color)
    {
        echo "Fords color is: ". $color;
    }
}

$ferrari = new Ferrari();
$ferrari->setCarColor("Red");

$ford = new Ford();
$ford->setCarColor("blue");