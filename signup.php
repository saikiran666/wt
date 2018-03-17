<?php
$fn = $_POST['fn'];
$lan = $_POST['lan'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$gender = $_POST['gender'];
$mobno = $_POST['mn'];

$server = "localhost:3306";



$username = "root";

$password = "";

$database = "users";

$tablename = "signup";


$connect = mysqli_connect($server,$username,$password,$database);
if(!$connect){

die("not connecting".mysqli_error());
}



$sql="INSERT INTO USERS (fn,lan,email,pass,gender,mobno) VALUES($fn,$lan,$email,$pass,$gender,$mobno);";
if(mysqli_query($connect,$sql)){
  echo " SIGNED UP SUCCESSFULLY";
}
else {
  echo mysql_error();
}
mysqli_close($connect);


 ?>
