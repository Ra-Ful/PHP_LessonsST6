<?php
class Animals {
    protected $feet = 0; // protected типа защищенный. "Не такуся" к которйо просто так не подключишься
    protected $name = "";
    public function __construct(string $name){
        $this ->name=$name;
    }
    public function info(){
        echo "Инфо: Имя".$this->name."Лап:".$this->feet;
    }
    
}
class Animals_Say extends Animals
{//extends  - наследование
    protected $say = "";

    public function __construct(string $name,string $say)
    {
        parent::__construct($name);//Сохранение предыдущей функции
        $this->say=$say;

    }
    public function speak(){
        echo "Имя: ".$this->name." Издает звук: ".$this->say;
    }

}

class Cats extends Animals_Say
{
    public function __construct(string $name)
    {
        parent::__construct($name," мяук ");
        $this -> feet=4;
    }
    public function info(){
        echo "Инфо: Имя:".$this->name."Лап: ".$this->feet." Издает звук: ".$this->say;
    }
    
}
$cat_1=new Cats("Данила ");
$cat_1->info();
echo "<hr>";
$cat_1->speak();
echo "<hr>";

class Unit{
    protected $name = "";
    protected $power = 0;
    public function __construct(string $name)
    {
        $this ->name=$name;
    }
    public function info(){
        echo " Компонент: ".$this->name." Потребление: " .$this->power;
    }


}
class memory extends Unit {
    protected $size = 0;
    protected $speed =0;

    public function __construct(string $name, $size, $speed)
    {
        parent::__construct($name);
        $this->size=$size;
        $this->speed=$speed;
    }
    public function info(){
        echo "компонент оперативная память: ".$this->name."Потребление: ".$this->power."Размер: ".$this->size."Скорость: ".$this->speed;
    }

    }




?>