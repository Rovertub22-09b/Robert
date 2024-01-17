<?php

class Database
{
    const HOST_NAME = 'localhost';
    const USER_NAME = 'root';
    const USER_PASSWORD = '';
    const DATABASE_NAME = 'Psiholog';

    public static $db;

    function __construct()
    {
        self::$db = new mysqli(
            self::HOST_NAME,
            self::USER_NAME,
            self::USER_PASSWORD,
            self::DATABASE_NAME
        );

        if (self::$db->connect_error) {
            die("Connect error: (" . self::$db->connect_errno . ") " . self::$db->connect_error);
        }
    }
}