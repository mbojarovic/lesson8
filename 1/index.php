<?php

require __DIR__ . '/classes/Db.php';

$db = new Db();
$data1 = $db->query(
    'SELECT * FROM PERSONS WHERE age=:age',
    [':age' => 12]
);

$data = $db->query(
    'SELECT * FROM PERSONS'
);
echo $data[1]->id;
var_dump($data);
foreach ($data as $value) {
    echo $value->id;
}