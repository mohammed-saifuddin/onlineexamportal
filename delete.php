
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Online exam-Delete</title>
</head>
<style>
.form-group{
    padding-left:280px;
    padding-right:280px;
}
.btn{
    margin:40px;
    margin-left:280px;
    background: -webkit-linear-gradient(left, #ec2e2eb4, #200dcfc0);
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
    background: -webkit-linear-gradient(left, green,  #200dcfc0);

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
<h1>Online exam portal</h1>
<h4>Delete a questions</h4>
<?php if(isset($message)) {
   echo "$message ";
}   
?>
<form method="POST" action="delete1.php">
<div class="form-group">

    <label for="exampleInputEmail1">Question no</label>
    <input type="text" class="form-control" id="exampleInputEmail1"name="question_no" aria-describedby="emailHelp" value=""  >
    </div>
  
  <button type="submit" class="btn btn-danger" name= "submit">Delete the question</button>
</form>
</body>
</html>
