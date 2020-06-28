<?php

$host='localhost';
$username='su';
$password='P@ss123';
$db_name='blog';


$conn=new mysqli($host,$username,$password,$db_name);

if($conn->connect_error){

  die('Database connection error: '.$conn->connect_error);
}else {
  // code...
  echo 'Database connected successfully';
}



 ?>
