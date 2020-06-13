<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn){
   echo "sucessfull";
}else{
   echo "unsucessful";
}
$user = $_POST['name'];
$email = $_POST['email'];

$query="INSERT INTO 2 (name,email) VALUE('$user','$email');

mysqli_query($conn,$query);


?>