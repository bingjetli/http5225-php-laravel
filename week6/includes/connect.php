<?php 

# Connection String
$connect = mysqli_connect('localhost', 'root', 'root', 'http5225', '3306');


if(!$connect){
  die("Connection Failed : ".mysqli_connect_error());
}

?>
