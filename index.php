<?php
include 'includes/classAutoLoader.inc.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
      $objPerson = new Person("Marco", "green", 28 , "nilo");
      echo $objPerson->getFirstName();
      echo "  ".$objPerson->eyeColor;

      $objPerson->setFirstname("Lucas");
      echo "\n set first name is = ".$objPerson->getFirstName();
      $objPerson->setLastName("Timmy");

      echo "\n last name = ".$objPerson->last."  \n";

      // $obj = new Pet();
      //
      // echo $obj->owener();

      // accessing static property method without creating object
      echo PersonStatic::$drinkingAge;
      PersonStatic::setDrinkingAge(18);
      echo PersonStatic::$drinkingAge;

       //accessing static properties and method by creating object
      $person = new PersonStatic("Marco", "green", 28);
      echo $person->getDrinkingAge();
     ?>

  </body>
</html>
