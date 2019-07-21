<?php
  //include "../app/php/config.php";


  function connecting(){
    try {
      $conDB= mysqli_connect("localhost", "root", "", "sweetevents");
      return $conDB;
    } catch (\Exception $e) {
      echo "Error en el servidor";
    }
  }

  //public static function getConnection(){
  //  return self::$conDB;
  //S}

 ?>
