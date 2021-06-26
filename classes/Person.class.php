<?php

class Person{

  protected $first = "Daniel";
  private $name;
  public $eyeColor;
  public $age = "28" ;
  public $last;

  public function __construct($name, $color, $age){
    $this->name = $name;
    $this->eyeColor = $color;
    $this->age = $age;

  }
   public function setFirstname($name){
     $this->name = $name;
   }
  public function setLastName($name){

    $this->last = $name;

  }
  public function getFirstName(){

    return $this->name;
  }
  public function getLastName(){
    return $this->last;
  }
}

class Pet extends Person{
  public function owener(){
    $a = $this->first;
   //echo $a;
    return $a;
  }
}
?>
