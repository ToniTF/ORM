<?php
require 'vendor/autoload.php';
require 'database.php';

use App\Models\Actor;
$actor = new Actor();
$actor->first_name = 'ANTONIO';
$actor->last_name = 'TROITIÑO';
$actor->save();

// Obtener todos los registros
$actors = Actor::all();

foreach ($actors as $actor) {
    echo $actor->first_name . "<br>";
}