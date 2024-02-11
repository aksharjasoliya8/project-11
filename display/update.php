
<?php

include 'connect.php';
$id = $_GET['updateid'];
$sql = "select * from book_form where id =$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$phone = $row['phone'];
$address = $row['address'];
$guests = $row['guests'];
$arrivals = $row['arrivals'];
$leaving = $row['leaving'];
$bday = $row['bday'];
$gender = $row['gender'];
$rail = $row['rail'];

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

    $sql = "update book_form set id='$id',name='$name',email='$email',phone='$phone',address='$address,guests='$guests,arrivals='$arrivals,leaving='$leaving,bday='$bday,gender='$gender,rail='$rail'
    where id=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        // echo "data updated successfully";
        header('location:display.php');
    } else {
        die(mysqli_error($con));
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="registrastion2.css" />
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/cupertino/jquery-ui.css">
</head>

<body>
    <h1>update form</h1>
    <!-- <div class="container">
        <form method="post">
            <label>name</label>
            <input type="text" name="name" id="name" placeholder="user name" value=
            <br><br>

            <label>email</label>
            <input type="text" name="email" id="email" placeholder="email" value=
            <br><br>
            <label>mobile</label>
            <input type="text" name="mobile" id="mobile" placeholder="mobile no." value=
            <br><br>
            <label>password</label>
            <input type="text" name="password" id="password" placeholder="password" value=
            <br><br>
            <button type="submit" name="submit">update</button>
        </form>

    </div> -->



    <div class="reeg">
        <section class="container">
            <h1>Registration Form</h1>
            <form action="#" class="form" method="post">
                <div class="input-box">
                    <label>Full Name</label>
                    <input type="text" name="name" placeholder="Enter full name" required value=<?php echo $name ?> />
                </div>
                <div class="input-box">
                    <label>Email Address</label>
                    <input type="text" name="email" placeholder="Enter email address" required value=<?php echo $email ?> />
                </div>
                <div class="input-box">
                    <label>Address</label>
                    <input type="text" name="address" placeholder="Enter address" required value=<?php echo $address ?> />
                </div>
                <div class="input-box">
                    <label>How many</label>
                    <input type="number" name="guests" placeholder="number of guests" required value=<?php echo $guests ?> />
                </div>

                

                <!-- <div class="input-box">
            <label>Where to</label>
            <input type="text" placeholder="Place you want to visit" required />
          </div> -->




                <div class="column">
                    <div class="input-box">
                        <label>Phone Number</label>
                        <input type="number" name="phone" placeholder="Enter phone number" required value=<?php echo $phone ?> />
                    </div>
                    <div class="input-box">
                        <label>Birth Date</label>
                        <input type="date" name="bday" placeholder="Enter birth date" required value=<?php echo $bday ?> />
                    </div>
                </div>
                <div class="column">
            <div class="input-box" class="col-md-2">
              <label>Arrival</label>
              <input name="arrivals" placeholder="Enter Arrival date" type="text" id="date_picker1" size=9 required value=<?php echo $arrivals ?> />
            </div>
            <div class="input-box" class="col-md-2">
              <label>Leaving</label>
              <input name="leaving" placeholder="Enter Leaving date" type="text" id="date_picker2" size=9 required value=<?php echo $leaving ?> />
            </div>
          </div>

                <div class="gender-box">
                    <h3>Gender</h3>
                    <div class="gender-option">
                        <div class="gender">
                            <input type="radio" id="check-male" name="gender"  checked value="Male"<?php echo $gender ?> />
                            <label for="check-male">male</label>
                        </div>
                        <div class="gender">
                            <input type="radio" id="check-female" name="gender" value="Female"<?php echo $gender ?> />
                            <label for="check-female">Female</label>
                        </div>
                        <div class="gender">
                            <input type="radio" id="check-other" name="gender" value="prefer not to say"<?php echo $gender ?> />
                            <label for="check-other">prefer not to say</label>
                        </div>
                    </div>
                </div>
                <div class="input-box address">


                    <!-- <input type="text" placeholder="Enter street address" required /> -->
                    <div class="input-box">
                        <label>select</label>
                    </div>
                    <div class="column">

                        <div class="select-box">

                            <select name="rail" value=<?php echo $rail ?>>

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
                <button type="submit" name="submit">Submit</button>
            </form>
        </section>
    </div>
    </div>

    <script  src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
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