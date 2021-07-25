<?php

  $tname = $_POST['tname'];
  $age = $_POST['age'];
  $gender = $_POST['gender'];
  $exp = $_POST['exp'];
  $expt = $_POST['expt'];
  $Phone = $_POST['Phone'];
  $address = $_POST['address'];


  $conn = new mysqli('localhost', 'root','','zymx');
  if($conn->connect_error){
    die('connection failed :'.$connect_error);
  }else{
    $stmt = $conn->prepare("insert into trainers(tname,age,gender,exp,expt,Phone,address)
    values('$tname','$age','$gender','$exp','$expt','$Phone','$address')");
    $stmt->execute();
    echo "Registered!";
    header('location: home.html');
    $stmt->close();
    $conn->close();
  }

 ?>
