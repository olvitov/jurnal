<?php

/**
 * Created by PhpStorm.
 * User: olvit
 * Date: 28.05.2016
 * Time: 14:26
 */
class LessonsModel
extends AbstractModel
{
    protected static $table = 'lessons';

    public $id;
    public $title;
    public $data;
    public $description;
    public $text;
    public $author;

}
