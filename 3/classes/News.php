<?php

require __DIR__ . '/Db.php';

class News
{
    public function getAllArticles()
    {
        $db = new Db();
        return $data = $db->query('SELECT * FROM News ORDER BY id DESC');
    }

    public function getOneArticle(int $id)
    {
        $db = new Db();
        return $data = $db->query('SELECT * FROM News WHERE id=:id', [':id' => $id]);
        //var_dump($data);
    }
}