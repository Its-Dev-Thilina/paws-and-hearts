<?php

#config - App
define('APP_NAME', 'Paws & Hearts');
define('BASE_PATH', __DIR__.'/');

#config - DB
define('HOST_NAME', 'localhost');
define('PORT', 3306);
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DATABASE', 'paws_and_hearts');

#config - Controllers
include_once BASE_PATH.'controllers/DashboardController.php';
include_once BASE_PATH.'controllers/PetController.php';
include_once BASE_PATH.'controllers/CaretakerController.php';
include_once BASE_PATH.'controllers/AdopterController.php';
include_once BASE_PATH.'controllers/AdoptionController.php';

#config - Routes
$routes = [
    ''       => [DashboardController::class, 'index'],
    
    'pets'  => [PetController::class, 'index'],
    'pets/new'  => [PetController::class, 'create'],
    'pets/edit'  => [PetController::class, 'edit'],
    'pets/delete'  => [PetController::class, 'delete'],
    'pets/new-specie'  => [PetController::class, 'create_specie'],
    'pets/edit-specie'  => [PetController::class, 'edit_specie'],

    'caretakers' => [CaretakerController::class, 'index'],
    'caretakers/new' => [CaretakerController::class, 'create'],

    'adopters' => [AdopterController::class, 'index'],
    'adopters/new' => [AdopterController::class, 'create'],

    'adoptions' => [AdoptionController::class, 'index'],
];