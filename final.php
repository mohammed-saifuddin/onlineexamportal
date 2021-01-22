
<?php
include "process.php";
//  session_start();

if(!isset($_SESSION['fname'])){
    //echo "you have logged out";
    ?>
    <script>
     alert('You are logged out')

    </script>
    <?php
    header("location:index.php");
   }
?>
<?php
include "connection.php";

$query="select * from questions";
$total_questions=mysqli_num_rows(mysqli_query($con,$query));



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>RESULT</title>
</head>
<style>
.jumbotron{
    background: -webkit-linear-gradient(left,green, #200dcfc0);
    
    color:white;
}
h1{
  text-align:center;
}
h2{
  text-align:center;
  color:white;
}
#con{
  padding:30px;
  margin-bottom:20px;
  
  background: -webkit-linear-gradient(left, #200dcfc0, crimson);
}
#con p{
  font-size:30px;
  text-transform:capitalize;
  font-weight:bold;
}
p{
  color:white;
}
.btn{
  background: -webkit-linear-gradient(left, maroon, #200dcfc0);
}

</style>
<body>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Online Exam Portal</h1>
    <p class="lead">
    
  </p>
  </div>
</div>
    <div class="container" id="con">
    <h2> RESULT</h2>
    <p><strong><?php  echo $_SESSION['fname'];      ?>       </strong>,<br>congratulations  you have completed this exam successfully</p>
    <p><strong> Marks : </strong>  <?php echo $_SESSION['score'];?> / <?php echo $total_questions;   ?></p>
    <p><strong> Percentage :</strong><?php echo $_SESSION['score']/$total_questions *100 ?>%</p>
    <?php unset($_SESSION['score']);?>
    <a class="btn btn-success btn-lg" href="logout.php" role="button">Logout</a>
    </div>
</body>
</html>