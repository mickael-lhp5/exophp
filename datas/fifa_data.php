<?php

$fifa_data = [
    [
        'image' => 'cristiano.jpeg',
        'name' => 'Cristiano Ronaldo',
        'team' => 'Juventus de Turin',
        'numero' => '7',
        'nationalité' => 'Portugal',
        'position' => 'attaquant',
        'age' => 35
    ],

    [
        'image' => 'pogba.jpeg',
        'name' => 'Paul Pogba',
        'team' => 'Manchester United',
        'numero' => '6',
        'nationalité' => 'France',
        'position' => 'milieu',
        'age' => 26
    ],

    [
        'image' => 'marquinhos.jpeg',
        'name' => 'Marquinhos',
        'team' => 'Paris Saint Germain',
        'numero' => '5',
        'nationalité' => 'Brésil',
        'position' => 'défenseur',
        'age' => 26
    ],

    [
        'image' => 'cristiano.jpeg',
        'name' => 'Alisson Becker',
        'team' => 'Liverpool',
        'numero' => '1',
        'nationalité' => 'Brésil',
        'position' => 'gardien',
        'age' => 28
    ]

];

var_dump($fifa_data);


// une première boucle pour parcourir l'ensemble des clés
foreach ($fifa_data as $key => $value) {
 echo("name: ".$key."\n"); // on affiche la clé
 //une deuxième boucle pour parcourir toutes les valeurs associées à une clé
 foreach ($fifa_data[$key] as $name){
echo($name."\n");
 }
}