<?php
session_start();
$con = mysqli_connect("http://54.90.116.248/","root","Iam@1234","carinfo") or die("connection was not created");
if(!isset($_SESSION['username'])){
    //$_SESSION['username'];
   header("location:../index.php");
}
 else{ 
 $ses = $_SESSION['username'];
  $qry=$con->query("SELECT * FROM admin WHERE email='$ses'");
  $res=mysqli_fetch_assoc($qry);
 $name=$res['name'];
 $level = $res['level'];
 $dob = $res['dob'];
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
    body{
        margin: 0px;
        padding: 0px;
        
    }
* {
  box-sizing: border-box;
}

.row::after {
  content: "";
  clear: both;
  display: table;
}

[class*="col-"] {
  float: left;
  padding: 15px;
}

html {
  font-family: "Lucida Sans", sans-serif;
}

.header {
  background-color: #9933cc;
  color: #ffffff;
  padding: 15px;
}

.menu ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

.menu li {
  padding: 8px;
  margin-bottom: 7px;
  background-color: #B6A59B;
  color: #ffffff;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.menu li:hover {
  background-color: #0099cc;
}

.aside {
  background-color: #B6A59B;
  padding: 15px;
  color: #ffffff;
  text-align: center;
  font-size: 14px;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.footer {
    position: fixed;
    bottom: 0px;
    width: 100%;
  background-color: #000000;
  color: #ffffff;
  text-align: center;
  font-size: 12px;
  padding: 15px;
}
    .brand{
        position:relative;
        
        margin: 10px;
        padding: 10px;
        height: 200px;
        
    }

/* For mobile phones: */
[class*="col-"] {
  width: 100%;
}

@media only screen and (min-width: 600px) {
  /* For tablets: */
  .col-s-1 {width: 8.33%;}
  .col-s-2 {width: 16.66%;}
  .col-s-3 {width: 25%;}
  .col-s-4 {width: 33.33%;}
  .col-s-5 {width: 41.66%;}
  .col-s-6 {width: 50%;}
  .col-s-7 {width: 58.33%;}
  .col-s-8 {width: 66.66%;}
  .col-s-9 {width: 75%;}
  .col-s-10 {width: 83.33%;}
  .col-s-11 {width: 91.66%;}
  .col-s-12 {width: 100%;}
}
@media only screen and (min-width: 768px) {
  /* For desktop: */
  .col-1 {width: 8.33%;}
  .col-2 {width: 16.66%;}
  .col-3 {width: 25%;}
  .col-4 {width: 33.33%;}
  .col-5 {width: 41.66%;}
  .col-6 {width: 50%;}
  .col-7 {width: 58.33%;}
  .col-8 {width: 66.66%;}
  .col-9 {width: 75%;}
  .col-10 {width: 83.33%;}
  .col-11 {width: 91.66%;}
  .col-12 {width: 100%;}
}
    a{text-decoration: none;}
</style>
</head>
<body>

<div class="header" style="background-image: url(images/car_b.jpg); background-size: cover">
  <h1 style="text-shadow: 2px 2px black,-2px -2px black">Car Information System</h1>
</div>

<div class="row">
  <div class="col-3 col-s-3 menu">
    <ul>
      <a href="dashboard.html"><li style="background-color:dimgrey">Home</li></a>
      <a href="addnewcar.php"><li>Add new cars</li></a>
      <a href="viewaddedcars.php"><li>View Added Cars</li></a>
      <a href="addnewadmin.php"><li>Add New Admin</li></a>
        <a href="logout.php"><li>Logout</li></a>
    </ul>
  </div>

  <div class="col-6 col-s-9" style="background-image: url(images/bmw.png); background-size:contain; height: 300px; background-repeat: no-repeat; color: white;text-shadow: 2px 2px black,-2px -2px black">
    <h1>The Car</h1>
    <p>It's not just a car-it's someone else's dream</p>
  </div>

  <div class="col-3 col-s-12">
    <div class="aside">
      <h2>Welcome <?php echo $name; ?></h2>
      <p>Level <?php echo $level ?> Admin of CarInfo</p>
      <h2>Email:</h2>
      <p><?php echo $ses ?></p>
      <h2>DOB</h2>
      <p><?php echo $dob ?></p>
    </div>
  </div>
</div>
    <div class="row">
    <h1>Popular Brands</h1>
    </div>
    <center>
<div class="row" style="height: 100px;">
    <a href="#"><div class="col-2 col-s-9 brand" style="background-image: url(images/bmw.png); background-size: contain; background-repeat: no-repeat;">
    <h2 style="text-shadow: 2px 2px white,-2px -2px white">BMW</h2>
    </div></a>
    <a href="#"><div class="col-2 col-s-9 brand" style="background-image: url(images/audi.jpg); background-size: contain; background-repeat: no-repeat;">
        <h2 style="text-shadow: 2px 2px white,-2px -2px white">AUDI</h2>
        </div></a>
    <a href="#"><div class="col-2 col-s-9 brand" style="background-image: url(images/maruti.jpg); background-size: contain; background-repeat: no-repeat;">
        <h2 style="text-shadow: 2px 2px white,-2px -2px white">
            MARUTI SUZUKI</h2>
    </div></a> 
    <a href="#">
    <div class="col-2 col-s-9 brand" style="background-image: url(images/tata.jpg); background-size: contain; background-repeat: no-repeat;">
        <h2 style="text-shadow: 2px 2px white,-2px -2px white">TATA</h2>
    </div></a>
    
    </div>
        </center>
<div class="footer">
  <p>&copy; ITER</p>
</div>

</body>
</html>
 <?php } ?> 