<?php

class Animal {
    private $numberOfFeet;
    private $hasFur;
    private $hasEars;

    function __construct()
    {
        $this->init();
    }

    private function init() {
        $this->numberOfFeet = 4;
        $this->hasFur = true;
        $this->hasEars = true;
    }

    public function setNumberOfFeet($numberOfFeet) {
        $this->numberOfFeet = $numberOfFeet;
    }

    public function setHasFur($hasFur) {
        $this->hasFur = $hasFur;
    }

    public function setHasEars($hasEars) {
        $this->hasEars = $hasEars;
    }

    public function getAnimal() {
        return [
            "numberOfFeet" => $this->numberOfFeet,
            "hasFur" => $this->hasFur,
            "hasEars" => $this->hasEars,
        ];
    }

    function __destruct() {
        echo "Build completed";
    }
}
