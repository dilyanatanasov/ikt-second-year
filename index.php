<?php

$welcomeMessage = "Good morning";
$age = 25;
$temp = 1.5;
$isTodayFriday = true;
$array = [
    $welcomeMessage,
    $isTodayFriday,
    $age,
    $temp,
];

//for ($i = 0; $i < sizeof($array); $i++) {
//    echo $array[$i] . "<br>";
//}
//
//$i = 0;
//while ($i < sizeof($array)) {
//    echo $array[$i] . "<br>";
//    $i++;
//}
$assocArray = [
    "welcome" => $welcomeMessage,
    "temp" => $temp,
    "isTodayFriday" => $isTodayFriday,
    "age" => $age,
];

//foreach ($assocArray as $item) {
//    echo $item . "<br>";
//}

function findDogBreed($nameOfDog) {
    switch ($nameOfDog) {
        case "Kiara":
            echo "Husky <br>";
            break;
        case "Rex":
            echo "Shepard <br>";
            break;
        case "Sharo":
            echo "Dalmatian <br>";
            break;
        case "Maxi":
            echo "Dog <br>";
            break;
        case "Mike":
            echo "Bulldog <br>";
            break;
        default:
            echo "Breed not found";
    }
}
findDogBreed("Dilyan");
