<?php

 // подключение автолоад require_once __DIR__ .  '/../models/Articles.php';

class ArticlesController
{
    public function actionAll()
    {
        $art = ArticlesModel::findOneByColumn('title', 'Сигнализация');
        $art->title = 'Подработка сигнализации 22222222';
        $art->save();
        var_dump($art->id);


    }
}
