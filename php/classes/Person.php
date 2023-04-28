<?php

class Person
{
  private $name;
  private $lastname;
  private $age;
  private $hp;
  private $mother;
  private $father;

  function __construct($name, $lastname, $age, $mother=null, $father=null)
  {
    $this->name = $name;
    $this->lastname = $lastname;
    $this->age = $age;
    $this->mother = $mother;
    $this->father = $father;
    $this->hp = 100;
  }
  function sayHi($name)
  {
    return "Hi, $name, I`m " . $this->name;
  }
  function setHp($hp)
  {
    if ($this->hp + $hp > 100) $this->hp = 100;
    else $this->hp = $this->hp + $hp;
  }
  function getHp()
  {
    return $this->hp;
  }
  function getName() {
    return $this->name;
  }
  function getMother() {
    return $this->mother;
  }
  function getFather() {
    return $this->father;
  }
  function getInfo() {
    return "<h2>A few words about my family.</h2><br>"."My name is: ".$this->getName()."My last name is: ".$this->getLastname()."<br>"."My father is: ";
  }
}
// Здоровье человека не может быть больше 100 единиц

$igor = new Person("Igor", "Smirnov", 75);//дедушка по папиной линии

$ivan = new Person("Ivan", "Ivanov", 45, null, $igor);
$irina = new Person("Irina", "Ivanova", 42);
$kuzya = new Person("Kuzya", "Ivanov", 12, $irina, $ivan);

echo $kuzya->getInfo();

//Создать 2 дедушки и 2 бабушки
