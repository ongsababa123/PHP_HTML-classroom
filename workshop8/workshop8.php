<?php
class Person{
public $name;
public function setName($name){
$this->name = $name;
}
public function getName(){
return $this->name;
}
}
$a = new Person;
$b = new Person;
$a->setName('Nikom');
echo $a->getName()."<br>";
$b->setName('Mali');
echo $b->getName()."<br>";
var_dump($a);
var_dump($b);
?>