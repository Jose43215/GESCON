<?php
  $mysqli = new mysqli("localhost","Joss","Contra123","gescon");
  if($mysqli->connect_errno){
    echo "Fallo al conectar a MYsql:(".$mysqli->connect_errno . ") " . $mysqli->connect_error;
  }
?>
