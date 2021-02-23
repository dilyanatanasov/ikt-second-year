<?php

class Printer
{
    public static function parse($assocArray) {
        echo "<pre>";
        print_r($assocArray);
        echo "</pre>";
    }
}

$assocArray = [
    "name" => "Dilyan",
    "name1" => "Dilyan",
    "name2" => "Dilyan",
    "name3" => "Dilyan",
    "name4" => "Dilyan",
    "name5" => "Dilyan",
];

Printer::parse($assocArray);

