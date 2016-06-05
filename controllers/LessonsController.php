<?php

 // подключение автолоад require_once __DIR__ .  '/../models/Lessonss.php';

class LessonsController
{
    public function actionAll() {

        $les = new LessonsModel();
        $les->title = 'Мариуполь Ленина 105ab';
        $les->text = 'ОСМД мира 105a';
        $les->author = 'Перец О.В.';
        $les->insert();

        var_dump($les->id);









        /*
          $lessons = Lessons::getAll();
          $view = new View();
          $view->items = $lessons;
        echo  $view->display('lessons/all.php');
  */

    }








  
  
  /*  public function actionOne() {


        $id = $_GET['id'];
        $lessons = Lessons::getOne($id);
        $view = new View();
        $view->item = $lessons;
        $view->display('lessons/one.php');
    }
*/
}
