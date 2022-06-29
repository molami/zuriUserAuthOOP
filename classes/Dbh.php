<?php

class Dbh{

  protected function connect(){
    try{
      #$host = "localhost";
      $username = "root";
      $password = "";
      $dbh = new PDO('msql:host=localhost;dbname=zuriphp', $username, $password);
      return $dbh;
    }
    catch (PDOException $e)
    print "Error: ". $e->getMessage() . "<br/>";
    die()
  }
}
