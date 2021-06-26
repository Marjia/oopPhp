<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
          include_once 'includes/newclass.inc.php';
      ?>
    <?php


      $object = new NewClass;
      unset($object);
      echo $object->getProperty();

     ?>

  </body>
</html>
