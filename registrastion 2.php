<?php
include 'connect.php';
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $guests = $_POST['guests'];
  $arrivals = $_POST['arrivals'];
  $leaving = $_POST['leaving'];
  $bday = $_POST['bday'];
  $gender = $_POST['gender'];
  $rail = $_POST['rail'];

  $sql = "insert into book_form(name,email,phone,address,guests,arrivals,leaving,bday,gender,rail) 
    values('$name','$email','$phone','$address','$guests','$arrivals','$leaving','$bday','$gender','$rail')";
  $result = mysqli_query($con, $sql);
  if ($result) {
    echo "data inserted successfully";
  } else {
    die(mysqli_error($con));
  }

}
?>

<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="registrastion2.css" />
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/cupertino/jquery-ui.css">
</head>

<body>
  <!-- <header>
        <div class="nav1">
        <div class="navbar">
          <a href="index.html">
            <img src="logo done 3.0.png" alt="LOGO" width="210" height="90">
        </a>
        
          <ul class="links">
            <li><a href="registration.html">home</a></li>
            <li><a href="#">about</a></li>
            <li><a href="#">contact us</a></li>
            <li><a href="#">pacages</a></li>
            <li><a href="profile.html">Profile</a></li>
          </ul>
          <div class="toggle_btn">
            <i class="fa-solid fa-bars"></i>
          </div>
        </div>
    
    </div>
      </header> -->
  <div class="loader">
    <div></div>
  </div>
  <div class="content7">
    <div class="slid1">
      <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">Clients</a>
        <a href="#">Contact</a>
      </div>



      <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>

    </div>

    <div class="reeg">
      <section class="container">
        <h1>Registration Form</h1>
        <form action="#" class="form" method="post">
          <div class="input-box">
            <label>Full Name</label>
            <input type="text" name="name" placeholder="Enter full name" required />
          </div>
          <div class="input-box">
            <label>Email Address</label>
            <input type="text" name="email" placeholder="Enter email address" required />
          </div>
          <div class="input-box">
            <label>How many</label>
            <input type="number" name="guests" placeholder="number of guests" required />
          </div>

          <div class="input-box">
            <label>Address</label>
            <input type="text" name="address" placeholder="Enter address" required />
          </div>

          <!-- <div class="input-box">
            <label>Where to</label>
            <input type="text" placeholder="Place you want to visit" required />
          </div> -->




          <div class="column">
            <div class="input-box">
              <label>Phone Number</label>
              <input type="number" name="phone" placeholder="Enter phone number" required />
            </div>
            <div class="input-box">
              <label>Birth Date</label>
              <input type="date" name="bday" placeholder="Enter birth date" required />
            </div>
          </div>
          <div class="column">
            <div class="input-box" class="col-md-2">
              <label>Arrival</label>
              <input name="arrivals" placeholder="Enter Arrival date" type="text" id="date_picker1" size=9 required />
            </div>
            <div class="input-box" class="col-md-2">
              <label>Leaving</label>
              <input name="leaving" placeholder="Enter Leaving date" type="text" id="date_picker2" size=9 required />
            </div>
          </div>

          <div class="gender-box">
            <h3>Gender</h3>
            <div class="gender-option">
              <div class="gender">
                <input type="radio" id="check-male" name="gender" value="Male" checked />
                <label for="check-male">male</label>
              </div>
              <div class="gender">
                <input type="radio" id="check-female" name="gender" value="Female" />
                <label for="check-female">Female</label>
              </div>
              <div class="gender">
                <input type="radio" id="check-other" name="gender" value="prefer not to say" />
                <label for="check-other">prefer not to say</label>
              </div>
            </div>
          </div>
          <div class="input-box address">


            <!-- <input type="text" placeholder="Enter street address" required /> -->
            <div class="input-box">
              <label>select railway station</label>
            </div>
            <div class="column">

              <div class="select-box">

                <select name="rail">

                  <option hidden>select the rail</option>
                  <option>America</option>
                  <option>Japan</option>
                  <option>India</option>
                  <option>Nepal</option>
                </select>
              </div>
              <!-- <input type="text" placeholder="Enter your city" required /> -->
            </div>
            <!-- <div class="column">
            <input type="text" placeholder="Enter your region" required />
            <input type="number" placeholder="Enter postal code" required />
          </div> -->
          </div>
          <button type="submit" name="submit"> Submit</button>
        </form>
      </section>
    </div>
  </div>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script  src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script>
    function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
    }
  </script>

  <script>
    $(window).on('load', function () {
      $(".loader").fadeOut(1000);
      $(".content7").fadeIn(1000);
    });
  </script>

  <script>
    $(document).ready(function () {
      ///////
      var startDate;
      var endDate;
      $("#date_picker1").datepicker({
        dateFormat: 'dd-mm-yy'
      })
      ///////
      ///////
      $("#date_picker2").datepicker({
        dateFormat: 'dd-mm-yy'
      });
      ///////
      $('#date_picker1').change(function () {
        startDate = $(this).datepicker('getDate');
        $("#date_picker2").datepicker("option", "minDate", startDate);
      })

      ///////
      $('#date_picker2').change(function () {
        endDate = $(this).datepicker('getDate');
        $("#date_picker1").datepicker("option", "maxDate", endDate);
      })
      ////////////////
    })
  </script>
</body>

</html>