<?php

echo PHP_VERSION;

final class NonStringaException extends Exception {

    public function __construct() {
        $this->message = "Il parametro non è una stringa!";
        $this->code = 666;
    }

}

function prova($string) {
    if (is_string($string))
        return strlen($string);
    throw new Exception;
}

function prova2($string) {
    $len = prova($string);
    echo "La stringa ha lunghezza $len";
}

try {
    prova2('gfgfg');
} catch (Exception $ex) {
    if ($ex instanceof Exception) :
        var_dump('NonStringaException');
    elseif ($ex instanceof NonStringaException) :
        var_dump('Exception');
    endif;
} finally {
    echo "Finito!";
}

$a = 0;
var_dump($a);
