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

    public function execute(string $sql)
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute();
        var_dump($res);
        return $res;
    }

}