<?php

require_once __DIR__ . '/../classes/DB.php';

class Articles {
    
    public $id;
    public $title;
    public $data;
    public $description;
    public $text;
    public $author;

    public static function getAll() {

        $db = new DB;
        return $db->queryAll('SELECT * FROM articles', 'articles');

    }

    public static function getOne($id) {

        $db = new DB();
        return $db->queryOne('SELECT * FROM articles WHERE id=' . $id, 'Articles');
    }
}
