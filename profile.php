

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>package</title>
    <title>ZYMX</title>
    <link rel="stylesheet" href="css/styles.css">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Sacramento&family=Ubuntu&display=swap" rel="stylesheet">
    <!-- icons -->
    <script src="https://kit.fontawesome.com/a29160b240.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <!--navigation bar-->
    <div class="navi">
        <ul class="navbar">
          <li class="name" style="float: left;">
                <h2>ZYMX</h2>
          </li>
          <li>
            <a  href="home.html">Home</a>
          </li>
          <li>
            <a href="#">Profile</a>
          </li>
          <li class="log" style="color: white;">
            <a href="login.php"><i class="fas fa-sign-out-alt">LogOut</i></a>
          </li>

        </ul>
      </div>
<!--profile form-->
      <div class="profile">
        <h3>Welcome to ZYMX</h3>
        <form class="form" action="connection.php" method="post" style="width: 400px;">
          <label for="cname">Name:</label>
          <input type="text" id="cname" name="cname" required><br><br />

          <label for="age">Age:</label>
          <input type="number" id="age" name="age"><br><br />

          <label for="gender">Gender:</label>
          <select id="gender" name="gender" required>
            <option value="select">--Select--</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
          </select>
          <br /><br />

          <label for="height">Height(CMs):</label>
          <input type="number" id="height" name="height" required><br><br />

          <label for="weight">Weight(KGs):</label>
          <input type="number" id="weight" name="weight" required><br><br />

          <label for="activity">Physical Activity:</label>
          <select id="activity" name="activity" required>
            <option value="select">--Select--</option>
            <option value="Light">Light</option>
            <option value="Moderate">Moderate</option>
            <option value="Vigorous">Vigorous</option>
          </select><br /><br />


          <label for="package">Packages</label>
          <select id="package" name="package" required>
            <option value="select">--Select--</option>
            <option value="Yoga">Yoga</option>
            <option value="Strength Training">Strength Training</option>
            <option value="Cardio">Cardio</option>
            <option value="Cardio + Strength Training">Cardio + Strength Training</option>
            <option value="Yoga + Strength Training">Yoga + Strength Training</option>
          </select><br /><br />

          <label for="phone">Phone:</label>
          <input type="number" id="Phone" name="Phone" min="10" required><br><br />

          <label for="address">Address:</label>
          <input type="text" id="address" name="address" required><br /><br />

          <input type="submit" value="Submit">
        </form>


        <h3>Enrollment for Trainers</h3>
        <form class="form" action="connection_1.php" method="post" style="width: 400px;">
          <label for="tname">Name:</label>
          <input type="text" id="tname" name="tname" required><br><br />

          <label for="age">Age:</label>
          <input type="number" id="age" name="age"><br><br />

          <label for="gender">Gender:</label>
          <select id="gender" name="gender" required>
            <option value="select">--Select--</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
          </select>
          <br /><br />


          <label for="exp">Experience</label>
          <select id="exp" name="exp" required>
            <option value="select">--Select--</option>
            <option value="Less than 1 year">Less than 1 year</option>
            <option value="1-2 years">1-2 years</option>
            <option value="More than 2 years">More than 2 years</option>
          </select><br /><br />

          <label for="expt">Expertise:</label>
          <input type="text" id="expt" name="expt" required><br /><br />

          <label for="phone">Phone:</label>
          <input type="number" id="Phone" name="Phone" min="10" required><br><br />

          <label for="address">Address:</label>
          <input type="text" id="address" name="address" required><br /><br />

          <input type="submit" value="Submit">
        </form>
        </div>
<!-- social section-->
        <div class="bottom">
        <a class="icons" href="" ><i class="fab fa-twitter fa-2x"></i></a>
        <a class="icons" href="" ><i class="fab fa-instagram-square fa-2x"></i></a>
        <a class="icons" href="" ><i class="fab fa-facebook-square fa-2x"></i></a>
        <p class="copyright">
            &copy ZYMX 2020.
        </p>
      </div>
  </body>
</html>



<!--  <label for="diet">Diet:</label>
  <select id="diet" name="diet" required>
    <option value="select">--Select--</option>
    <option value="veg">Vegetarian</option>
    <option value="non veg">Non-Vegetarian</option>
    <option value="egg">Eggetarian</option>
  </select><br /><br />--

  <label for="pack">Package:</label>
  <select id="pack" name="pack" required>
    <option value="select">--Select--</option>
    <option value="Yoga">Yoga</option>
    <option value="Strength Training">Strength Training</option>
    <option value="Cardio">Cardio</option>
    <option value="Cardio + Strength Training">Cardio + Strength Training</option>
    <option value="Yoga + Strength Training">Yoga + Strength Training</option>
  </select><br /><br />

  <!--<label for="ses">Sessions:</label>
  <select id="ses" name="ses" required>
    <option value="select">--Select--</option>
    <option value="six">6AM-9AM</option>
    <option value="ten">10AM-12PM</option>
    <option value="two">2.30PM-5.30PM</option>
    <option value="six pm">6PM-7PM</option>
    <option value="seven">7.45PM-10PM</option>
  </select><br /><br />-->
