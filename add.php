<?php
include "connection.php";

if(isset($_POST['submit'])){
    $question_no=$_POST['question_no'];
    $question_text=$_POST['question_text'];
    $correctchoice=$_POST['correctchoice'];
    $choice=array();
    $choice[1]=$_POST['choice1'];
    $choice[2]=$_POST['choice2'];
    $choice[3]=$_POST['choice3'];
    $choice[4]=$_POST['choice4'];
   
    $insertquery="INSERT INTO `questions`(`question_no`, `question_text`) VALUES ('$question_no','$question_text')";
    $res=mysqli_query($con,$insertquery);
    if($res){
        foreach($choice as $options =>$value){
            if($value!=""){
                if($correctchoice ==$options){
                    $is_correct=1;
                }
                else{
                    $is_correct=0;
                }
                $insertquery="INSERT INTO `options`(`question_no`, `is_correct`, `options`) VALUES ('$question_no','$is_correct','$value')";
                $insert_row=mysqli_query($con,$insertquery);
                if($insert_row){
                    continue;
                }
                else{
                    echo "second query is not executed";
                }
            }
            $message="Questions is has been added successfully";
          
        }
    }
   
}
$query="select * from questions";
$questions=mysqli_query($con,$query);
$total=mysqli_num_rows($questions);
$next=$total+1;


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
.form-group{
    padding-left:280px;
    padding-right:280px;
}
.btn{
    margin:40px;
    margin-left:280px;
    background: -webkit-linear-gradient(left, #ec2e2eb4, maroon);
}
h1{
    text-align:center;
    color:white;
}
h4{
    text-align:center;
    color:white;
}
body{
    background: -webkit-linear-gradient(left, green, #200dcfc0);

}
label{
    color:white;
}
@media only screen and (max-width: 640px) and (min-width:360px) {
  .form-group{
    padding-left:30px;
    padding-right:30px;
}
.btn{
    margin:40px;
   
   
}
}
@media only screen and (max-width: 678px) and (min-width:425px) {
  .form-group{
    padding-left:30px;
    padding-right:30px;
}
.btn{
    margin:40px;
    
   
}
}
@media only screen and (max-width: 570px) and (min-width:320px) {
  .form-group{
    padding-left:30px;
    padding-right:30px;
}
.btn{
    margin:40px;
    
   
}
}
</style>
<body>
<div class="text-center" style="color:white;">
<h1 text-center>Online exam portal</h1>
<h4>Add a questions</h4>
</div>
<?php if(isset($message)) {
   echo "<h4>".$message ."</h4>";
}   ?>
<form method="POST">
<div class="form-group">
 
    <label for="exampleInputEmail1">Question no</label>
    <input type="text" class="form-control" id="exampleInputEmail1"name="question_no" aria-describedby="emailHelp" value="<?php echo $next;   ?>"  >
    </div>
  <div class="form-group">
 
    <label for="exampleInputEmail1">Question Text</label>
    <input type="text" class="form-control" id="exampleInputEmail1"name="question_text" aria-describedby="emailHelp" >
    </div>
    
  <div class="form-group">
    <label for="exampleInputPassword1">choice 1</label>
    <input type="text" class="form-control" name= "choice1"id="exampleInputPassword1" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">choice 2</label>
    <input type="text" class="form-control"name= "choice2" id="exampleInputPassword1" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">choice 3</label>
    <input type="text" class="form-control" name= "choice3" id="exampleInputPassword1" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">choice 4</label>
    <input type="text" class="form-control" name= "choice4" id="exampleInputPassword1" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">correct option</label>
    <input type="number" class="form-control"name= "correctchoice" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-danger" name= "submit">Add the question</button>
</form>
</body>
</html>
