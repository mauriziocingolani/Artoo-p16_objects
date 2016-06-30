<?php

abstract class Object {

    public $test = 'default test';

    public function test() {
        var_dump($this->test);
    }

    abstract public function test2(array $params);

    abstract public function getString();
}
