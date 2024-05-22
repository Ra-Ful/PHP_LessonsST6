<?php

$a = 0;
if (isset($_GET['a'])) {
    $a = $_GET['a'];
}

$b = 0;
if (isset($_GET['b'])) {
    $b = $_GET['b'];
}


$array = array(
'c' => $a*$b
);
header('Content-Type: application/json');
echo json_encode($array, JSON_UNESCAPED_UNICODE);