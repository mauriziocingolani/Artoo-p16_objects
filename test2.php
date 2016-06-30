<?php

include_once './oggetti/Utente.php';
include_once './oggetti/Component.php';

function prova($obj) {
    if ($obj instanceof Object) :
        $obj->getString();
        return 'OK!!!';
    endif;
    if ($obj instanceof Component) :
        $obj->getInteger(array());
    endif;
//    return 'ERRORE!!!';
}

$utente = new Utente('pippo');
var_dump(prova($utente));
