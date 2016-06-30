<?php

/*
 * classe Post
 * - titolo
 * - utente (oggetto Utente)
 */

require_once './Utente.php';
require_once './Post.php';

try {
    $utente1 = Utente::CreaUtente('Maurizio', 'Editore');
    $utente1->setEmail('email@erere.it');
    $post1 = new Post('Titolo del post', 565656);
    var_dump($post1);
} catch (Exception $e) {
    echo '<p style="color: red;">ERRORE!!! ' . $e->getMessage() . '</p>';
}

