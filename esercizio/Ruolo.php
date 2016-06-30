<?php

class Ruolo {

    private static $ruoli;

    public static function GetRuoli() {
        if (self::$ruoli == null)
            self::$ruoli = array(1 => 'Amministratore', 2 => 'Editore', 3 => 'Utente');
        return self::$ruoli;
    }

}
