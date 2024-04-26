<?php
class Todo
{
    private $db;
    const DATABASE = 'ToDo';
    const USERNAME = 'root';
    const PASSWORD = '';

    public function __construct()
    {
        $this->db=mysqli_connect("localhost", self::USERNAME, self::PASSWORD, self::DATABASE);
        $this->db->set_charset("utf8");

        if(!$this->db){
            echo 'Error connect DB';
            exit;
        }
        if($this->db->connect_error)
        {
            die("Ошибка:".$this->db->connect_error);

        }
    }
    public function add($text)
    {
        $sql = "INSERT INTO `todo`(`id`, `Text`, `complete`)VALUES(NULL,?,'0');";
        $stmt = $this->db->prepare($sql);
        $stmt ->bind_param("s",$text);
        $stmt ->execute();
    }

    public function delete($id)
    {
        $sql = "DELETE `todo` WHERE id=?";
        $stmt = $this->db->prepare($sql);
        $stmt ->$stmt->bind_param("s", $id);
        $stmt ->execute();
    }
    public function complete($id)
    {
        $sql = "UPDATE `todo` SET complete=1 WHERE id=?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("s", $id);
        $stmt->execute();
    }
      
    public function select()
    {
        $sql = "SELECT * FROM Todo ORDER BY complete";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
    
        return $result;
    
    }
    public function show()
    {
      $todos = $this->select();
      if ($todos) {
        foreach ($todos as $row) {
          /** тут будет вывод или формирование вывода списка */
          var_dump($row);
        }
    }
}
}
?>