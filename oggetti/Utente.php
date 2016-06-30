<?php

include_once 'Object.php';
include_once 'Component.php';

class Utente extends Object implements Component {

    const VERSION = '1.0';

    private $username = 'default value';
    private static $version = '1.0';
    private static $n = 0;

    public function __construct($username) {
        $this->username = $username;
        self::$n++;
    }

    public function getUsername() {
        return $this->username;
    }

    public function setUsername($username) {
        if (is_string($username))
            $this->username = $username;
    }

    public function test2(array $params) {
        ;
    }

    public function getString() {

        return "";
    }

    public function getInteger(array $array) {
        
    }

    public function getFloat(array $array) {
        
    }

    public static function getVersion() {
        var_dump(self::VERSION);
        return self::$version;
    }

    public static function getN() {
        return self::$n;
    }

}
