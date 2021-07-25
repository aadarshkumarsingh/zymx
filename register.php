<?php
include 'register_conn.php';;
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>hi</title>
  <link rel="stylesheet"  href="css/styles2.css">
</head>
<body>
  <div class="hero1">

    <h1 class="title2"> ZYMX </h1>

    <div class="formc">

    <div class="button">
          <div id="btn"></div>
          <button type="button" class="log1"> <h4 class="reg">register</h4> </button>
    </div>
  <form class="impg" method="post" action="register.php">

    <div>
      <input class="inpf" type="text" name="name" placeholder="username">
    </div>
    <div>
      <input class="inpf" type="email" name="email" placeholder="email">
    </div>
    <div>
      <input class="inpf" type="password" name="password" placeholder="password">
    </div>
    <!--<div>
      <input class="inpf" type="password" name="confirm" placeholder="confirm password">
    </div>-->
    <div>
      <button class="submitd" type="submit" name="submit"> <h4 class="sub">submit</h4> </button>
    </div>

  </div>







  </form>

  </div>



</body>
</html>
