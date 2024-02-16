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
  text-align: left;
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
      <a href="index.php"><li>Home</li></a>
      <a href="product.php"><li>Products</li></a>
      <a href="stores.php"><li>Stores</li></a>
      <a href="contact.php"><li style="background-color:dimgrey">Contact</li></a>
        <a href="adminlogin.php"><li>Admin</li></a>
    </ul>
  </div>

  <div class="col-6 col-s-9">
    <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d119783.34367020837!2d85.73110416248616!3d20.24931499895128!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3a19a7a44399eebf%3A0x2c31b0466c6cf42b!2sITER%20-%20Institute%20of%20Technical%20Education%20%26%20Research%2C%20Jagamara%2C%20Khandagiri%2C%20Bhubaneswar%2C%20Odisha%20751030!3m2!1d20.2493289!2d85.8011446!5e0!3m2!1sen!2sin!4v1575085669878!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    EMAIL: support.carinformationsydtem@gmail.com<br>
    ITER,Bhubaneswar
  </div>

  <div class="col-3 col-s-12">
    <div class="aside">
      <h2>About</h2>
      <p>Get information about your dream car here.</p><br>
      <p>Compare cars of different brands.</p><br>
      
      <p>Choose the best car for you.</p><br>
      
      
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
