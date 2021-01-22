
<?php

session_start();


if(!isset($_SESSION['fname'])){
 echo "you have logged out";
 header("location:index.php");
}

?>
<html>
    <head>
        <title>
            online exam registration 
        </title>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <!-- Latest compiled and minified CSS -->

</head>
<style>
   .register{
    background: -webkit-linear-gradient(left, green, #200dcfc0);
    margin-top: 3%;
    padding: 3%;
    border-radius: 20px;
}
.register-left{
    text-align: center;
    color: #fff;
    margin-top: 12%;
}

.register-left input{
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 60%;
    background: #cdd5dd;
    font-weight: bold;
    color: #383d41;
    margin-top: 30%;
    margin-bottom: 3%;
    cursor: pointer;
}
.register-right{
    background: rgb(248, 251, 252);
    border-top-left-radius: 5% 10%;
    border-bottom-left-radius: 5% 10%;
    border-top-right-radius: 5% 10%;
    border-bottom-right-radius: 5% 10%;
}
.register-left img{
    margin-top: 15%;
    margin-bottom: 5%;
    width: 25%;
    -webkit-animation: mover 2s infinite  alternate;
    animation: mover 1s infinite  alternate;
}
@-webkit-keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
@keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
.register-left p{
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}
.register .register-form{
    padding: 10%;
    margin-top: 10%;
}
.btnRegister{
    float: right;
    margin-top: 10%;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    background: #052a52;
    color: #fff;
    font-weight: 600;
    width: 50%;
    cursor: pointer;
}
.register .nav-tabs{
    margin-top: 3%;
    border: none;
    background: #0062cc;
    border-radius: 1.5rem;
    width: 28%;
    float: right;
}
.register .nav-tabs .nav-link{
    padding: 2%;
    height: 34px;
    font-weight: 600;
    color: #fff;
    border-top-right-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem;
}
.register .nav-tabs .nav-link:hover{
    border: none;
}
.register .nav-tabs .nav-link.active{
    width: 100px;
    color: #0062cc;
    border: 2px solid #0062cc;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}
.register-heading{
    text-align: center;
    margin-top: 8%;
    margin-bottom: -15%;
    color: #495057;
}
.form-group{
    margin:10px;
    padding:10px;
}

</style>
<body>
    
<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        
                        <h3>Welcome to online exam reigistration</h3>
                        <p>Discipline is the weapon of a growing child</p>
                        
                    </div>
                    <div class="col-md-9 register-right">
                        
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Online Exam registration</h3>
                                <form method="POST">
                                <div class="row register-form">
                                <?php
include "connection.php";
$id=$_GET['id'];
$showquery="SELECT * from registration where id=$id";
$showdata=mysqli_query($con,$showquery);
$arrdata=mysqli_fetch_array($showdata);
if(isset($_POST['submit'])){
    $idupdate=$_GET['id'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $pass=$_POST['pass'];
    $cpass=$_POST['cpass'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $branch=$_POST['branch'];
    $rollno=$_POST['rollno'];
   
      
        $query="UPDATE registration SET fname='$fname',lname='$lname',pass='$pass',cpass='$cpass',email='$email',phone='$phone',branch='$branch',rollno='$rollno',id=$id  where id=$idupdate";
        $res=mysqli_query($con,$query);
              if($res)
              {
            ?>
            <script>
            alert("Registration form  is updated succesfully");
            </script>
            <?php
             }
             else
             {
             ?>
            <script>
            alert("Registration form is not updated");
           </script>
            <?php
       
       }
    }
        
       
   




?>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="fname" placeholder="First Name *" value="<?php echo $arrdata['fname'] ?>" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="lname" placeholder="Last Name *" value="<?php echo $arrdata['lname'] ?>" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="pass" placeholder="Password *" value="<?php echo $arrdata['pass'] ?>" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control"  name="cpass" placeholder="Confirm Password *" value="<?php echo $arrdata['cpass'] ?>" />
                                        </div>
                                        
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="Your Email *" value="<?php echo $arrdata['email'] ?>" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" minlength="10" maxlength="10" name="phone" class="form-control" placeholder="Your Phone *" value="<?php echo $arrdata['phone'] ?>" />
                                        </div>
                                        <div class="form-group">
                                        <input type="text"  name="branch" class="form-control" placeholder="Branch *" value="<?php echo $arrdata['branch'] ?>" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="rollno" placeholder="Enter Your Roll number *" value="<?php echo $arrdata['rollno'] ?>" />
                                        </div>
                                        <input type="submit" class="btnRegister" name="submit"  value="update"/>
                                    </div>
                                </div>
                                </form>
                            </div>
                            
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
</body>
</html>
