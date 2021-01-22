<?php

session_start();


if(!isset($_SESSION['fname'])){
 echo "you have logged out";
 header("location:index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <title>Online examination Portal</title>
</head>
<style>
.navbar-custom{
  background: -webkit-linear-gradient(left, #ec2e2eb4, #200dcfc0);

}
.navbar-custom a{
  color:white;
  margin-left:30px;
  
}
form button{
  margin-left:150px;
  color:white;
}
h1{
  text-align:center;
  margin:60px;
  color:white;
  text-transform:capitalize;
}
button a{
  margin-right:30px;
  text-align:center;
  color:white;
}
.center{
  margin:60px;
  margin-left:410px;
  
}
.center button a{
  margin-left:30px;
  
}
a{
  margin-right:30px;
  padding:20px;
  justify:center;
  text-align:center;
}
.btn{
  background: -webkit-linear-gradient(left, #ec2e2eb4, #200dcfc0);
}
body{
    background: -webkit-linear-gradient(left,green ,  #200dcfc0);
} 
marquee{
  padding:10px;
  color:white;
  font-size:20px;
  font-weight:bold;
  text-transform:capitalize;
  
}
@media only screen and (max-width: 640px) and (min-width:360px) {
  .center{
  padding:50px;
  margin-left:120px;
  color:white;
}
button a{

  text-align:center;
  color:white;
}
a{
  padding:20px;
  justify:center;
  margin-right:30px;
 
}
}
@media only screen and (max-width: 678px) and (min-width:425px) {
  .center{
 
  margin-left:180px;
  color:white;
}
button a{
  margin-right:30px;
  text-align:center;
  color:white;
}
a{
 
  justify:center;
  margin-right:30px;
  
}
}
@media only screen and (max-width: 593px) and (min-width:375px) {
  .center{
  margin:90px;
  padding:10px;
  margin-left:65px;
  color:white;
}
button a{
  
  margin-left:10px;
   margin-right:20px;
  text-align:center;
  color:white;
}
a{
  
  justify:center;
  margin-right:30px;
  
}
}
@media only screen and (max-width: 570px) and (min-width:320px) {
  .center{
  margin:60px;
  margin-left:65px;
  color:white;
}
button a{
   margin-left:0px;
   margin-right:20px;
  text-align:center;
  color:white;
  
}
a{

  justify:center;

}
}
</style>
<body>
<nav class="navbar navbar-expand-lg navbar-custom">
  <a class="navbar-brand" href="#">Online Exam Portal</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav ">
      <a class="nav-item nav-link active" href="#"><span class="sr-only"></span></a>
   
      <a class="nav-item nav-link" href="register.php"></a>
      <a class="nav-item nav-link" href="instruction.php"></a>
      <a class="nav-item nav-link" href="instruct.php"></a>
      
      <a class="nav-item nav-link" href="instruct.php"></a>
      
      
      <form class="form-inline my-2 my-lg-0">
      <div>
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><a href="logout.php">logout</a></button>
    </div>
    </form>

    </div>
  </div>
</nav>
<marquee>
Online Exam Portal
</marquee>
<h1>Hello <?php  echo $_SESSION['fname'];      ?> <br> welcome to online exam portal </h1>
<div class="center">
<button type="button" class="btn btn-danger btn-lg"><a href="instruction.php">Take a exam</a></button><br>

</div>
</body>
</html>