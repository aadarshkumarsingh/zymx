<?php

  $cname = $_POST['cname'];
  $age = $_POST['age'];
  $gender = $_POST['gender'];
  $height = $_POST['height'];
  $weight = $_POST['weight'];
  $activity = $_POST['activity'];
  $package = $_POST['package'];
  $Phone = $_POST['Phone'];
  $address = $_POST['address'];


  $conn = new mysqli('localhost', 'root','','zymx');
  if($conn->connect_error){
    die('connection failed :'.$connect_error);
  }else{
    $stmt = $conn->prepare("insert into profile(cname,age,gender,height,weight,activity,package,Phone,address)
    values('$cname','$age','$gender','$height','$weight','$activity','$package','$Phone','$address')");
    $stmt->execute();
    echo "Registered!";
    header('location: home.html');
    $stmt->close();
    $conn->close();
  }

 ?>
