<?php

require_once(dirname(__DIR__) . '/html/cors.php');

$user = $_POST['user'];
$wineId = $_POST['wineId'];

echo($user.'Done ! >'.$wineId.'< Done!');

