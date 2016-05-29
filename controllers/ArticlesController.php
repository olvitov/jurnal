<?php

 // подключение автолоад require_once __DIR__ .  '/../models/Articles.php';

class ArticlesController
{
    public function actionAll()
    {
        $article = new ArticlesModel();
        $article->title = 'Тест2';
        $article->date = '29-05-16';
        $article->description = '5ESS';
        $article->text =  'Авария2';
        $article->author = 'Олвит';
        $article->insert();


    }
}
