<?php

class Iterabile implements Iterator {

    private $a;
    private $i = 0;
    private $n;
    private $keys;

    public function __construct(array $array) {
        $this->a = $array;
        $this->n = count($array);
        $this->keys = array_keys($array);
    }

    public $test = 'default test';

    public function current() {
        return (string) $this->a[$this->keys[$this->i]];
    }

    public function key() {
        return $this->keys[$this->i];
    }

    public function next() {
        $this->i++;
    }

    public function rewind() {
        $this->i = 0;
    }

    public function valid() {
        return $this->i < $this->n;
    }

}
