<?php
include "connection.php";
$query="select * from questions";
$total_questions=mysqli_num_rows(mysqli_query($con,$query));



?>

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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Online Exam Portal -instruct</title>
</head>
<style>
h1{
    text-align:center;
    color:darkblue;
    text-transform:capitalize;
}
h2{
  text-align:center;
  color:   #200dcfc0 ;
  text-transform:capitalize;
}
h2{
  color:white;
}
p{
  text-transform:capitalize;
  color:white;
}
h3{
  text-align:center;
  color:white;
  text-transform:capitalize;
}
.form-group{
    text-align:center;
}
h5{
  color:white;
}
marquee{
  padding:30px;
  color:white;
  font-size:20px;
  font-weight:bold;
  text-transform:capitalize;
  
}
.btn{
    margin-left:350px;
    padding:10px;
    border-radius:5px;
    background: -webkit-linear-gradient(left, maroon, blue);
}
body{
    background: -webkit-linear-gradient(left, green ,  #200dcfc0  );
}   
button a{
    color:white;
}
@media only screen and (max-width: 640px) and (min-width:360px) {
  .btn{
  margin:60px;
  margin-left:80px;
  color:white;
}
}
@media only screen and (max-width: 678px) and (min-width:425px) {
  .btn{
  margin:70px;
  margin-left:140px;
  color:white;
}
}
@media only screen and (max-width: 570px) and (min-width:320px) {
  .btn{
  margin:60px;
  margin-left:65px;
  color:white;
}
}
</style>
<body>
<form>
<h1>Online Exam Portal</h1>
  <div class="form-group">
  <marquee>Hello ,<?php  echo $_SESSION['fname']; ?>  </marquee>
    <h3>Test your skills</h3>
    <h5>This is multiple choice exam  to test your  knowlege</h5>
    <p><strong>Number of questions:</strong><?php echo $total_questions;?></p>
    <p><strong>Type:</strong</p>multiple choice questions
    <p><strong>Estimated time for the exam:</strong</p>    <?php echo $total_questions*1;?> Minutes
  </div>
  
  <button type="submit" class="btn btn-primary"><a href="startexam.php?n=1">Start Exam</a></button>
</form>
</body>
</html>