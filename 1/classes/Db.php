<?php

require __DIR__ . '/../config.php';

class Db
{
    protected $dbh;

    public function __construct()
    {
        $dsn = DB_DSN;
        $this->dbh = new PDO($dsn, DB_USER, DB_PASS);
    }
}