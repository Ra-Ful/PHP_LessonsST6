<?php


class Todo
{
  private $db; //Подключенная база 

  const DATABASE = 'ToDo';
  const USERNAME = 'root';
  const PASSWORD = '';

  function __construct($DATABASE = self::DATABASE,$USERNAME = self::USERNAME,$PASSWORD = self::PASSWORD)
    {
      $this->db = mysqli_connect("localhost", self::USERNAME, self::PASSWORD,  self::DATABASE);
      $this->db->set_charset("utf8");
  
      if (!$this->db) {
        echo 'Error connect DB';
        exit;
      }
  
      if ($this->db->connect_error) {
        die("Ошибка: " . $this->db->connect_error);
      }
    }
  
  public function add($text)
  {
    $sql = "INSERT INTO `todo` (`id`, `Text`, `complete`) VALUES (NULL, ?, '0');";
    $stmt = $this->db->prepare($sql);
    $stmt->bind_param("s", $text);
    $stmt->execute();
    $id = $stmt->insert_id;
    return $id;
  }

  public function delete($id)
  {
    $sql = "DELETE FROM `todo` WHERE id=?";
    $stmt = $this->db->prepare($sql);
    $stmt->bind_param("s", $id);
    $stmt->execute();
  }


  public function complete($id,$complete=1)
  {

    $sql = "UPDATE `todo` SET complete=? WHERE id=?";
    $stmt = $this->db->prepare($sql);
    $stmt->bind_param("is", $complete,$id);
    $stmt->execute();
  }

  public function select()
  {

    $sql = "SELECT * FROM Todo ORDER BY complete DESC, id";
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
        var_dump($row); echo "<hr>";
      }
    }
  }
}
