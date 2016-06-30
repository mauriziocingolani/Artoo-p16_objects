<?php

class Prova {

    public $var = 'aaa';
    private static $istanza;

    private function __construct($param) {
        
    }

    public static function getIstanza($param) {
        if (!is_int($param))
            throw new Exception("Parametro non intero!");
        if (self::$istanza == null) :
            self::$istanza = new Prova($param);
        endif;
        return self::$istanza;
    }

}

$a = Prova::getIstanza('uyuyu');
