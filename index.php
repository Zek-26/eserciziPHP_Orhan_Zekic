<?php

// ESERCIZIO 1

$sum = 0;
$counter = 0;
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
foreach($array as $element){
    if($element % 2 == 0) {
        $sum += $element;
        $counter++;
    } else {
        $sum = $sum;
        $counter = $counter;
    }
}
$media = $sum / $counter;
echo $media . "\n";

//ESERCIZIO 2

$users = [
    ['name' => 'Pino', 'surname' => 'Lavatrice', 'gender' => 'M'],
    ['name' => 'Girolamo', 'surname' => 'Trombetta', 'gender' => 'F'],
    ['name' => 'Vincenzo', 'surname' => 'Gasolio', 'gender' => 'Undefined'],
];
foreach($users as $user){
    if($user['gender'] === 'M') {
        var_dump("Buongiorno sig. " . $user['name'] . " " . $user['surname']);
    } elseif ($user['gender'] === 'F') {
        var_dump("Buongiorno sig.ra " . $user['name'] . " " . $user['surname']);
    } else {
        var_dump("Buongiorno " . $user['name'] . " " . $user['surname']);
    }
}

// ESERCIZIO 3

// Scrivere un programma che stampi in console tutti i numeri da uno a cento. Se il numero è multiplo di 3 stampare “PHP” al posto del numero; se multiplo di 5 stampare “JAVASCRIPT”; se multiplo di 3 e 5 contemporaneamente deve stampare “HACKADEMY110".

$numbers = 1;
for($i = 0; $i < 100; $i++) {
    if($numbers % 15 == 0) {
        echo "HACKADEMY110 \n";
    } elseif ($numbers % 5 == 0) {
        echo "JAVASCRIPT \n";
    } else if ($numbers % 3 == 0) {
        echo "PHP \n";
    } else {
        echo "$numbers \n";
    }
    $numbers++;
}

