<?php

$invalid = '';
if(isset($_POST['submit'])) {
	if (empty($_POST['name']) || empty($_POST['password']))
	{
		$invalid = "incorrect";
	}

	else{

		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$conn = mysqli_connect("localhost","root","","zymx");
		$query = mysqli_query($conn , "INSERT INTO login (name, email, password)
  			  VALUES('$name', '$email', '$password')");

			if ($query === TRUE) {
			echo "inserted successfully";
			header('location: login.php');
		}
		else {
			echo "error";
		}
		mysqli_close($conn);

	}
}

 ?>
