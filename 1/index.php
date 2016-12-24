<?php

require __DIR__ . '/classes/Db.php';

$db = new Db();
$db->execute('SELECT * FROM PERSONS');