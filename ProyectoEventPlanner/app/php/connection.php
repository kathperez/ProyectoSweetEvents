<?php
  include "config.php";

  function connecting(){
    try {
      $conDB= mysqli_connect(host, user, pass, db);
      mysqli_set_charset($conDB,'utf8');
      return $conDB;
    } catch (\Exception $e) {
      echo "Error en el servidor";
    }
  }

  function closeConnection($link){
    mysqli_close( $link );
  }

  //public static function getConnection(){
  //  return self::$conDB;
  //S}

 ?>
