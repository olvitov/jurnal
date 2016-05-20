<?php

require_once __DIR__ . '/autoload.php';

$ctrl = isset($_GET['ctrl']) ? $_GET['ctrl'] : 'Articles';
$act = isset($_GET['act']) ? $_GET['act'] : 'All';
$ctrl = isset($_GET['ctrl']) ? $_GET['ctrl'] : 'Lessons';
$act = isset($_GET['act']) ? $_GET['act'] : 'All';

$controllerClassName = $ctrl . 'Controller';
// подключение автолоад require_once __DIR__ . '/controllers/' . $controllerClassName . '.php';
$controller = new $controllerClassName;
$method = 'action' . $act;
$controller->$method();
