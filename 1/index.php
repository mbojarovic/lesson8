<?php

require __DIR__ . '/classes/Db.php';

$db = new Db();
$data = $db->query(
    'SELECT * FROM PERSONS WHERE age=:age',
    [':age' => 12]
);

var_dump($data);