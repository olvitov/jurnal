<?php

require_once __DIR__ .  '/../models/Articles.php';

class ArticlesController
{
    public function actonAll() {

        $items = Articles::getAll();

        include __DIR__ . '/../views/index.php';

    }

}
