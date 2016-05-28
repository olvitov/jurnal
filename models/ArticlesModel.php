<?php

/**
 * Created by PhpStorm.
 * User: olvit
 * Date: 28.05.2016
 * Time: 14:26
 */
class ArticlesModel
extends AbstractModel
{
    protected static $table = 'articles';

    public $id;
    public $title;
    public $data;
    public $description;
    public $text;
    public $author;
    

}
