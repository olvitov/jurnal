<?php

 // подключение автолоад require_once __DIR__ .  '/../models/Articles.php';

class ArticlesController
{
    public function actionAll() {


        $articles = Articles::getAll();
        $view = new View();
        $view->items = $articles;
     echo $view->display('articles/all.php');

    }

    public function actionOne() {


        $id = $_GET['id'];
        $articles = Articles::getOne($id);
        $view = new View();
        $view->item = $articles;
        $view->display('articles/one.php');


    }

}
