<?php

use Core\App;

    $greeting = "Hello";

    $a = 5;
    $b = 2;

    //consultem els registres e la taula books de la base de dades
    $books = App::get('database')->selectAll('books');
    $players = App::get('database')->selectAll('players');

    //cridem a la vista
    require '../resources/views/index.blade.php';