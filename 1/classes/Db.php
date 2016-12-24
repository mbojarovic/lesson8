<?php

require __DIR__ . '/../config.php';

class Db
{
    public function __construct()
    {
        $dsn = DB_DSN;
        $dbh = new PDO($dsn, DB_USER, DB_PASS);
        return $dbh;
    }

}