<?php

 // подключение автолоад require_once __DIR__ .  '/../models/Articles.php';

class LessonsController
{
    public function actionAll() {

      //  $items = Lessons::getAll();
        $lessons = Lessons::getAll();
        $view = new View();
        $view->items = $lessons;
      echo  $view->display('lessons/all.php');


    }

    public function actionOne() {


        $id = $_GET['id'];
        $lessons = Lessons::getOne($id);
        $view = new View();
        $view->item = $lessons;
        $view->display('lessons/one.php');
    }

}
