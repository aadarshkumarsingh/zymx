
<?php
include 'login_conn.php';
 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet"  href="css/styles2.css">
</head>
<body>


		<div class="hero">
			<h1 class="title1"> ZYMX </h1>

			<div class="formb">
				<div class="button">
					<div id="btn"></div>
					<button type="button" class="log"> <h4 class="logb">login</h4> </button>
                </div>
		<form class="impg" method="post" action="login.php">


		<div>
			<input type="text" class="inpf" name="name" placeholder="username">
		</div>
		<div>
			<input type="password" class="inpf" name="password" placeholder="password">
		</div>
		<div>
			<button type="submit" class="submitb" name="login"> <h4 class="let">lets'go</h4> </button>
		</div>
		<div>
		 <h4>Not a member?</h4>
			<button type="submit" class="submitc" name="submit2" ><h4 class="reg1">register</h4> </button>
		</div>







			</div>



		</div>




  </form>

</body>
</html>
