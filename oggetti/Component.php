<?php

interface Component {

    const CONST1 = 'pippo';
    const CONST2 = 'pluto';

    public function getInteger(array $array);

    public function getFloat(array $array);
}
