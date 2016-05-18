<?php

require __DIR__ . '/models/Articles.php';


$items = Articles::getAll();




include __DIR__ . '/views/index.php';
