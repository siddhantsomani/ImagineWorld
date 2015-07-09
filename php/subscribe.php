<?php
  $emailid = $_POST['emailid'];
  if(!isset($emailid)){
    header("location: ../index.html");
  }
  else {
    $username="root";
    $host="localhost";
    $password="";
    $dbname="imagineworld";

    $dblink = mysqli_connect($host,$username,$password);
    mysqli_select_db($dblink,$dbname) or die("Error.Couldn't Connect to Database");
    $result = mysqli_query($dblink,"INSERT INTO subscribe (emailid) values ('$emailid')");
    header("location: ../index.html");
  }

 ?>
