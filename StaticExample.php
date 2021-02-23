<?php



























$assocArray = [
    "name" => "Dilyan",
    "age" => 25,
    "height" => 200
];

class Printer {
    public static function parse($array) {
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }
}

Printer::parse($assocArray);