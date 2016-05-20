<?php

// подлючение автолоад require_once __DIR__ . '/../classes/DB.php';

class Lessons
    extends AbstractModel

{

    
    public $id;
    public $title;
    public $data;
    public $description;
    public $text;
    public $author;

    protected static $table = 'Lessons';
    protected static $class = 'Lessons';

    

   
}
