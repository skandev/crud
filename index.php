<?php
require_once 'Personne.php';
require_once 'PersonneManager.php';

use App\Personne;
use App\PersonneManager;

$db = new \PDO('mysql:host=localhost;dbname=test_perso', 'root', '');

$perso = [
    'id' => 1,
    'nom' => 'Last name',
    'prenom' => 'First name'
];

$personne = new Personne($perso);
$manager  = new PersonneManager($db);
$manager->add($personne);

var_dump($personne);
