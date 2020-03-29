<?php

function NewDB(){
      try
      {
	      $bdd = new PDO("sqlsrv:Server=localhost;Database=MegaCasting", "sa", "Sql2019");
      }
      catch (Exception $e)
      {
        die('Erreur : ' . $e->getMessage());
      }
      return $bdd;
}


function getIp(){
    if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    else
        $ip=$_SERVER['REMOTE_ADDR'];
    return $ip;
}
