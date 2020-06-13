<?php
$con = mysqli_connect('localhost','root');
if($con){
    echo "sucessful";
}else{
    echo "unsuessful";
}

mysqli_select_db($con,'stationary-shop');
$user=$_POST['user'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$comment=$_POST['comment'];

$query="insert into userinfodata (user,email, mobile, comment) values('$user','$email','$mobile','$comment')";
echo "$query";
mysqli_query($con,$query);

header('location:index.php');
?>