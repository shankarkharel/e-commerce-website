<?php

 $dbhost ='localhost';
 $dbuser = 'root';
 $dbpass = '';
 $db_name="hamrombl";
echo"Yahah";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db_name);
 
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
  $result = $conn->query("SELECT * FROM `registration` WHERE email='$email'");
  $row = $result->num_rows;
  echo($row);



if($row>=0){
$sql  = "INSERT INTO registration (username, email,password)
VALUES ('$name', '$email', '$password')";
echo('sucessfully registered');
//ob_start(); //start the buffer

if ($conn->query($sql) === TRUE) {
  

 //header('Location: login.php');

 //ob_clean();

 
 
 


// <script type="text/javascript"> 

// window.location.rel="login.php" target="_blank"

// </script>

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
else{
  //require('index.php');
  // header('location');

}

$conn->close();


?>