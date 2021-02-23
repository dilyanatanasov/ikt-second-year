<?php



































require_once "Animal.php";

class Firefighter extends Person {
    private $fighter;

    public function __construct() {
        echo "You are setting a fighter";
        echo "<br>";
    }

    public function getFighter() {
        $this->name = "Ivan";
        $this->weight = 80;
        $this->height = 180;

        $this->fighter = [
            "name" => $this->name,
            "weight" => $this->weight,
            "height" => $this->height
        ];

        return $this->fighter;
    }

    public function __destruct() {
        echo "Fighter builded";
    }
}

$fireFighter = new Firefighter();
print_r($fireFighter->getFighter());