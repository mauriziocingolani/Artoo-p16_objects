<?php

include_once './oggetti/Utente.php';
include_once './oggetti/UtenteConEmail.php';

$utente1 = new Utente('Maurizio');
var_dump($utente1);

echo '<br />';

$utente2 = new UtenteConEmail('Franco', 'maurizio@gmail.com');
var_dump($utente2);
