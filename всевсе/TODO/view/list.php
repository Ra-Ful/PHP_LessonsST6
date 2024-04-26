<ul>
    <?php
    foreach($todo->select() as $row){
        $item = file_get_contents("view/template/item.tpl");
        $item = str_replace('{ID}', $row["id"], $item);
        $item = str_replace('{TEXT}', $row["Text"], $item); 
        echo $item;
    }
    
    
    ?>
</ul>