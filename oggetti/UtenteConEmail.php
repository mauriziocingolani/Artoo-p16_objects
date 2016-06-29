<?php

class UtenteConEmail extends Utente {

    private $email = 'maurizio@gmail.com';

    public function __construct($username, $email) {
        parent::__construct($username);
        $this->email = $email;
    }

    public function getUsername() {
        return parent::getUsername() . ' &lt;' . $this->email . '&gt;';
    }

}
