<?php

require_once(dirname(__DIR__) . '/html/cors.php');
require_once(dirname(__DIR__) . '/html/Wines.php');

$model = new Wines();

$sql = $model->list('');

echo json_encode($sql->fetchAll());
