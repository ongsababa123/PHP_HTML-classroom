<?php
class person{
    public $name;

    public function setName($name){
        $this->name= $name;
    }
    public function getName(){
        return $this->name;
    }
}
    $a = new Person;
    $a -> setName("Nopphagaw T.");
    echo "{$a->getName()}<br>";
    echo "$a->name<br>"
?>