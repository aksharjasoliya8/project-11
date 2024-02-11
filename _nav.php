


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
  button:hover {
  color: #2d63c8;
  background-color:burlywood;
  /* text-shadow: 0 0 15px white,0 0 15px chocolate,0 0 25px chocolate,0 0 100px chocolate; */
}

li{
    list-style: none;
    
}
a{
    text-decoration: none;
    color: black;
    font-size: 20px;
    transition: all ease 0.5s;
    font-family: Calibri, sans-serif;
    
}
/* li:after{
  content: "";
  position: absolute;
  background-color: burlywood;
  height: 3px;
  width: 100%;
  left: 0;
  bottom: -10px;
} */
a:hover{
    color: white;
    text-shadow: 0 0 15px black,0 0 20px chocolate,0 0 30px chocolate,0 0 100px chocolate;
}

  header{
    position: relative;
    
   
    background-color: transparent;
}
.navbar{
    width:100%;
    height: 80px;
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
    background-color: transparent;
    font-weight: 900;
}
.navbar .log a{
    /* font-size: 20px; */
    font-weight: bold;
}
.navbar .links{
    display: flex;
    gap: 2rem;
}
img{
   cursor: pointer;
   
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  
  right: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 10px;
  float: left;
}
.spnu span{
    float: right;
    padding-right: 2%;
    
}
.sidenav a {
  padding: 8px 8px 8px 60px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
  
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
  
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
<body>
<div class="loader">
    <div></div>
  </div>
  <div class="content7">
    <header>
      <div class="navbar">
        <a href="index.html">
          <img src="logo done 3.0.png" alt="LOGO" width="210" height="90">
        </a>
        <!-- <div class="log"><img src="logo done 3.0.png" alt="image" width="190" height="90"></div>
      <div class="logo"><a href="#">Incredible India</a></div> -->
        <ul class="links">
          <li><a href="registrastion 2.html">Home</a></li>
          <li><a href="logout.php">logout</a></li>
          <li><a href="login.php">login us</a></li>
          <li><a href="signup.php">singup</a></li>
          <!-- <li><a class="nav-link" href="welcome.php">Home <span class="sr-only">(current)</span></a></li> -->
        </ul>
        <div class="slid1">
          <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Clients</a>
            <a href="#">Contact</a>
          </div>


          <div class="spnu">
            <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
          </div>
        </div>
      </div>


    </header>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
    function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
    }
  </script>
</body>
</html>