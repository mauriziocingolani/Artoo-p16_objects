<?php

class Post {

    public $titolo;
    public $utente;

    public function __construct($titolo, $utente) {
        if (!$utente instanceof Utente)
            throw new Exception('Parametro $utente non di classe Utente.');
        $this->titolo = $titolo;
        $this->utente = $utente;
    }

}
