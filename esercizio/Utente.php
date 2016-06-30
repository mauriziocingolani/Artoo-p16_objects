<?php

include_once './Ruolo.php';

class Utente {

    public $nomeutente;
    public $ruolo;
    private $email;

    private function __construct($nomeutente, $ruolo) {
        $this->nomeutente = $nomeutente;
        $this->ruolo = $ruolo;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        if (is_string($email) && strpos($email, '@') !== false)
            $this->email = $email;
    }

    public static function CreaUtente($nomeutente, $ruolo) {
        $ruoli = Ruolo::GetRuoli();
        $ruoloEffettivo = array_search($ruolo, $ruoli);
        if ($ruoloEffettivo !== false) :
            $a = new Utente($nomeutente, $ruoloEffettivo);
            return $a;
        endif;
        throw new Exception('Ruolo non riconosciuto: ' . $ruolo);
    }

}
