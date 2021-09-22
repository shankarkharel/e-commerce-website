<?php

$password = ($_POST['pass']);
$email = $_POST['mail'];





 $dbhost ='localhost';
 $dbuser = 'root';
 $dbpass = '';
 $db_name="hamrombl";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db_name);
 
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
  $result = $conn->query("SELECT * FROM `registration` WHERE `email`=$email ");
  $row = $result->num_rows;


if($row>=1){
// $sql  = "INSERT INTO registration (username, email,password)
// VALUES ('$name', '$email', '$password')";
header('location: ../index.php');
}
else{
  //require('index.php');s
 exit;
}

$conn->close();






?>