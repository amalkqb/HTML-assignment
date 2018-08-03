<?php

$servername = "localhost";
$username = "root";
$password = "1qamalb8";
$dbname = "qb";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

else{
  echo "success";
  $name = $_POST["name"];
  $email = $_POST["email"];
  $password = $_POST["psw"];
  $nn = $_POST["nn"];
  $gender = $_POST["gender"];
}

$sql = "INSERT INTO data1 VALUES ('$name', '$email', ' $password', '$nn', '$gender')";
$sql1 = "select * from data1";
echo $sql;


if(mysqli_query($conn,$sql)){
echo"<script type = "text/javascript">alert("Account created succesfully");</script>";
echo"<script type="text/javascript">location.href = 'login_page.html';</script>";"
}
else{
  die("Failed to create account");
}
?>
