<?php

 // подключение автолоад require_once __DIR__ .  '/../models/Articles.php';

class LessonsController
{
    public function actionAll() {

        $items = Lessons::getAll();

        include __DIR__ . '/../views/lessons/all.php';

    }

    public function actionOne() {


        $id = $_GET['id'];
        $item = Articles::getOne($id);
        include __DIR__ . '/../views/lessons/one.php';
    }

}
