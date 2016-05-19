<?php

// подлючение автолоад require_once __DIR__ . '/../classes/DB.php';

class Articles
    extends AbstractModel

{

    
    public $id;
    public $title;
    public $data;
    public $description;
    public $text;
    public $author;

    protected static $table = 'Articles';
    protected static $class = 'Articles';

    

   
}
