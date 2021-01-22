<?php

session_start();




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Admin-Add subject</title>
</head>
<style>
.head{
  background: -webkit-linear-gradient(left,maroon, #200dcfc0);
    padding:50px;
    font-size:20px;
}
h1{
    
    color:white;
}
.container{
    margin:60px;
    padding:60px;
    padding-right:20px;
    padding-left:20px;
    margin-right:30px;
    margin-left:30px;
    background: -webkit-linear-gradient(left,green ,  #200dcfc0 );
}
.btn{
  margin:30px;
  padding:20px;
  padding-left:20px;
  padding-right:20px;
  background: -webkit-linear-gradient(left,green, #200dcfc0);
}
.container .btn{
  margin:30px;
  padding:20px;
  background: -webkit-linear-gradient(left,maroon, #200dcfc0);
}
a{
  color:white;
}
@media only screen and (max-width: 640px) and (min-width:360px) {
  .btn{
  margin:25px;
  padding:10px;
}
a{
  color:white;
  padding:10px;
}
.container{
    margin:2px;
    margin-top:20px;
   
    background: -webkit-linear-gradient(left,green ,  #200dcfc0 );
}
.btn{
   margin-left:0px;
 } 
.head{
  padding-right:-10px;
}
}
@media only screen and (max-width: 678px) and (min-width:425px) {
  .container{
    margin:1px;
    margin-top:20px;
    
   
    background: -webkit-linear-gradient(left,green ,  #200dcfc0 );
}
.btn{
   margin-left:0px;
 } 
a{
  color:white;
  padding:10px;
}
}
@media only screen and (max-width: 570px) and (min-width:320px) {
  .container{
    margin:2px;
    margin-top:20px;
    background: -webkit-linear-gradient(left,green ,  #200dcfc0 );
  }
    a{
  color:white;
  padding:10px;
}
 .btn{
   margin-left:0px;
 }   
    
}


</style>
<body>
<div class="jumbotron jumbotron-fluid">
  <div class="head">
    <h1 class="display-4">Online Exam Portal</h1>
    <p class="lead">
    <a class="btn btn-success btn-lg" href="logout1.php" role="button">Logout</a>
  </p>
  </div>
</div>
<div class="container text-center">
<h1>Admins operations</h1>
<a class="btn btn-success" href="add.php" role="button">Add  the  questions</a><br>
<a class="btn btn-primary" href="update.php" role="button">Update the questions</a>
<a class="btn btn-danger" href="delete.php" role="button">Delete the questions</a>
<a class="btn btn-danger" href="display.php" role="button">view students registration</a>



</div>
</body>
</html>