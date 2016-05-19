<?php

 // подключение автолоад require_once __DIR__ .  '/../models/Articles.php';

class ArticlesController
{
    public function actionAll() {

        $items = Articles::getAll();

        include __DIR__ . '/../views/articles/all.php';

    }

    public function actionOne() {


        $id = $_GET['id'];
        $item = Articles::getOne($id);
        include __DIR__ . '/../views/articles/one.php';
    }

}
