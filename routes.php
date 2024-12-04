<?php
//fitxer per definir les rutes
return [
    '/' => '../App/Controllers/HomeController.php@index',
    '/home' => '../App/Controllers/HomeController.php@index',
    '/index' => '../App/Controllers/HomeController.php@index',
    '/index.php' => '../App/Controllers/HomeController.php@index',

    '/books' => '../App/Controllers/BookController.php@index',
    '/books/create' => '../App/Controllers/BookController.php@create',
    '/books/store' => '../App/Controllers/BookController.php@store',
    '/books/edit/{id}' => '../App/Controllers/BookController.php@edit',
    '/books/update/{id}' => '../App/Controllers/BookController.php@update',
    '/books/delete/{id}' => '../App/Controllers/BookController.php@delete',
    '/books/destroy/{id}' => '../App/Controllers/BookController.php@destroy',
    '/books/confirm-delete/{id}' => '../App/Controllers/BookController.php@confirmDelete',
    '/players' => '../App/Controllers/PlayersController.php@index',
    '/players/create' => '../App/Controllers/PlayersController.php@create',
    '/players/store' => '../App/Controllers/PlayersController.php@store',
    '/players/edit/{id}' => '../App/Controllers/PlayersController.php@edit',
    '/players/update/{id}' => '../App/Controllers/PlayersController.php@update',
    '/players/delete/{id}' => '../App/Controllers/PlayersController.php@delete',
    '/players/destroy/{id}' => '../App/Controllers/PlayersController.php@destroy',
    '/players/confirm-delete/{id}' => '../App/Controllers/PlayersController.php@confirmDelete',


];