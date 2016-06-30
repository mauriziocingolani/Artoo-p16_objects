<?php

include_once './oggetti/Utente.php';
include_once './oggetti/UtenteConEmail.php';
require_once './oggetti/Object.php';

//var_dump(Utente::$version);
var_dump(Utente::getVersion());
var_dump(Utente::VERSION);


$utente1 = new Utente('Maurizio');
$utente3 = new Utente('Maurizio');
$utente4 = new Utente('Maurizio');
$utente5 = new Utente('Maurizio');
var_dump(Utente::getN());
//var_dump($utente1->getVersion());

echo '<br />';

$utente2 = new UtenteConEmail('Franco', 'maurizio@gmail.com');
var_dump($utente2);
