<?php
include "connection.php";

session_start();
$number=$_GET['n'];
$query="select * from questions where question_no=$number";
$result=mysqli_query($con,$query);
$question=mysqli_fetch_assoc($result);

$query="select * from options where question_no=$number";
$choices=mysqli_query($con,$query);
$query="select * from questions";
$total_questions=mysqli_num_rows(mysqli_query($con,$query));
?>

<?php


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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Online exam portal</title>
</head>
<style>
.jumbotron{
    background: -webkit-linear-gradient(left, green, #200dcfc0);
    text-align:center;
    color:white;
    text-transform:capitalize;
}
h4{
  text-align:center;
}
 
.current{
    background:#FFF8DC;
    padding:20px;
    color:black;
    text-transform:capitalize;
}
button{
  margin-top:10px;
  margin-left:30px;
}
button a{
  color:white;
}
.btn{
  color:white;
  background: -webkit-linear-gradient(left, green, #200dcfc0);
}
.btn a{
  color:white;
  background: -webkit-linear-gradient(left, green, #200dcfc0);
}
#mark{
  text-align:left;
}
</style>
<body>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Online Exam portal</h1>
    <h3>Hello ,<?php  echo $_SESSION['fname'];      ?><h3>
  </div>
</div>
    <div class="container  ">
      <div class="current">Questions <?php echo $number;   ?> of <?php echo $total_questions; ?></div>
      <h3><?php echo $question['question_text']."?";?></h3>
      <form method="POST" action="process.php">
      <div class="col-sm-10 ">
        <div class="form-check text-left">
        
        
        
          <?php 
          while($row = mysqli_fetch_assoc($choices))
          {
            ?>
            <input  type="radio" name="choice"  value="<?php echo $row['id'];?>">
          <?php
          echo $row['options'];
          ?>
          <br>
            <?php 
          }  
          ?>
          
           
          
        
        
        </div>
        
      <input type="hidden" name="number" value="<?php  echo $number; ?>">
      <input type="submit" class="btn " id="btn" name="submit"value="submit" />
    
      </form>
    </div>
    
</body>
</html>