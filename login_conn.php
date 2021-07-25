<?php
if(isset($_POST['submit2']))
{
	$conn = mysqli_connect("localhost","root","","hello");
	header('location: register.php');
}
$invalid = '';

if(isset($_POST['login'])) {
	if (empty($_POST['name']) || empty($_POST['password']))
	{
		$invalid = "incorrect";
	}
	else{

		$name = $_POST['name'];
		$password= $_POST['password'];

		$conn = mysqli_connect("localhost","root","","zymx");

		$query1 = mysqli_query($conn , "SELECT * FROM login WHERE name='$name' AND password='$password'");
		$rows = mysqli_num_rows($query1);

		if ($rows == 1) {
			echo "login successful";
			header('location: home.html');
		}
		mysqli_close($conn);
	}
}
?>
