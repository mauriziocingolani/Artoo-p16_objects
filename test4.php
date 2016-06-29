<?php

include_once './traits/Trait1.php';
include_once './traits/Trait2.php';
include_once './oggetti/Utente.php';

class Test4 extends Utente {

    use Trait1,
        Trait2 {
        Trait1::getString insteadof Trait2;
        Trait2::getString as getString2;
    }

}

$t1 = new Test4();
$t1->attr1 = 'pippo';
//$t1->func1();
var_dump($t1->getString());
var_dump($t1->getString2());

