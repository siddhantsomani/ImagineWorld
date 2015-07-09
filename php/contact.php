<?php
  $name = $_POST['contactname'];
  $city = $_POST['cityname'];
  $email = $_POST['emailid'];
  $msg = $_POST['textarea'];

  if(!(isset($name) || isset($city) || isset($email) || isset($msg))){
    header("location: ../index.html");
  }
  else {
    $user = "root";
    $pass = "";
    $host = "localhost";
    $db = "imagineworld";

    $dblink = mysqli_connect($host,$user,$pass);
    mysqli_select_db($dblink,$db) or die("Error");
    $result = mysqli_query($dblink,"INSERT INTO contact (name,city,email,msg) values ('$name','$city','$email','$msg')");
    header("location: ../index.html");
  }
 ?>
