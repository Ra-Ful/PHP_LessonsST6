<?php
$data = json_decode(file_get_contents('php://input'), true);
/*
$a = $data['a'];
$b = $data['b'];
*/
/*
$array = array(
    'c' => $a*$b
    );
*/
$array = $data;

$array['id']=0;

sleep(0.1);

header('Content-Type: application/json');
echo json_encode($array, JSON_UNESCAPED_UNICODE);
