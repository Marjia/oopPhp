<?php

class PersonStatic{

  protected $first = "Daniel";
  private $name;
  public $eyeColor;
  public $age = "28" ;
  public $last;

 public static $drinkingAge = 21;
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

  public function getDrinkingAge(){
    return self::$drinkingAge;
  }

  public static function setDrinkingAge($age){
    self::$drinkingAge=$age;
  }
}

?>
