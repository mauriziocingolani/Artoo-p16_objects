<?php

include_once './iterator/Iterabile.php';
error_reporting(E_ALL);

$iterabile = new Iterabile(array(
    1 => 343,
    '34scsd' => array(1, 2, 3),
    true,
        ));

foreach ($iterabile as $k => $v) :
    echo "$k : $v<br />";
endforeach;
