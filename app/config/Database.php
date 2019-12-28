<?php


class Database {
    static private $_conexion;

    function __construct() {
    }

    function connections() {
        self::$_conexion = ADONewConnection('mysqli');
        self::$_conexion->Connect(HOST, USER, PASS, DB_NAME);
        self::$_conexion->setFetchMode(ADODB_FETCH_ASSOC);
        self::$_conexion->Execute("SET NAMES 'utf8'");
    }

}