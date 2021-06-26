<?php

class NewClass{
  //properties and methods goes hebre
 public $data = "I am a property";

 public function __construct(){
   echo "this class has been instantiated <br>";
 }

 public function setNewProperty($newdata){
    $this->data = $newdata;
 }
 public function getProperty(){
   return $this->data;
 }

 public function __destruct(){
   echo "<br> this is the end of the class!!";
 }
}
?>
