<?php

class Utente {

    private $username = 'default value';

    public function __construct($username) {
        $this->username = $username;
    }

    public function getUsername() {
        return $this->username;
    }

    public function setUsername($username) {
        if (is_string($username))
            $this->username = $username;
    }

}
