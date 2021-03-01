<?php

class Debug
{
    public static function parse($array) {
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }

    public static function parseAndDie($array) {
        echo "<pre>";
        print_r($array);
        echo "</pre>";
        die();
    }
}