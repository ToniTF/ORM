<?php
require 'vendor/autoload.php';
require 'database.php';
use App\Models\Actor;
use App\Models\Film;
/*$films = Film::all();

foreach ($films as $film) {
    echo $film->title . "<br>";
}*/

/*
use App\Models\Actor;
$actor = new Actor();
$actor->first_name = 'ANTONIO';
$actor->last_name = 'TROITIÑO';
$actor->save();

// Obtener todos los registros
$actors = Actor::all();

foreach ($actors as $actor) {
    echo $actor->first_name . "<br>";
}*/
$peliculas = Film::all();
foreach ($peliculas as $pelicula) {
    echo $pelicula->title . "<br>";
    foreach ($pelicula->actors as $actor) {
        echo $actor->first_name . " " . $actor->last_name . "<br>";
    }
}
