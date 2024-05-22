<?php

require_once "todo_class.php";

$Todo = new Todo();

$data_in = json_decode(file_get_contents('php://input'), true);

$data_out = $data_in;

if ($data_in['cmd']=='item_add') 
{   // Записать в базу данных.....
    //$data_out['text'] = $data_in['text'].' Тебя взломали... ';
    $id=$Todo->add($data_in['text']);

    $data_out['id']=$id;
    $data_out['complete']=0;
}

if ($data_in['cmd']=='item_delete') 
{   // Удалить из базы данных.....
    $id = $data_in['id'];
    $Todo->delete($id);
    //..... 
}

if ($data_in['cmd']=='item_change') 
{   // сменить отметку
    $id = $data_in['id'];
    $checked = $data_in['checked'];
    $Todo->complete($id,$checked);
     
}

if ($data_in['cmd']=='item_all') 
{   // сменить отметку
     
    $todos=$Todo->select();


    $item_all=[];

    if ($todos) {
        foreach ($todos as $row) {
            $item = array(
                'id' => $row['id'],
                'text' => $row['Text'],
                'complete' => $row['complete']
            );
            $item_all[]=$item;
        }
     }    

     $data_out['item_all']=$item_all;


}


//sleep(1);

header('Content-Type: application/json');
echo json_encode($data_out, JSON_UNESCAPED_UNICODE);
