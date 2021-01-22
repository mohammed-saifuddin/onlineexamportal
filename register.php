

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
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="firstname" placeholder="First Name *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="lastname" placeholder="Last Name *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="password" placeholder="Password *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control"  name="confirm" placeholder="Confirm Password *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <div class="maxl">
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="Email" placeholder="Your Email *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" minlength="10" maxlength="10" name="Phone" class="form-control" placeholder="Your Phone *" value="" />
                                        </div>
                                        <div class="form-group">
                                        <input type="text"  name="branch" class="form-control" placeholder="Branch *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="Rollno" placeholder="Enter Your Roll number *" value="" />
                                        </div>
                                        <input type="submit" class="btnRegister" name="submit"  value="Register"/>
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
<?php
include "connection.php";
if(isset($_POST['submit'])){
    $fname=mysqli_real_escape_string($con,$_POST['firstname']);
    $lname=mysqli_real_escape_string($con,$_POST['lastname']);
    $pass=mysqli_real_escape_string($con,$_POST['password']);
    $cpass=mysqli_real_escape_string($con,$_POST['confirm']);
    $email=mysqli_real_escape_string($con,$_POST['Email']);
    $phone=mysqli_real_escape_string($con,$_POST['Phone']);
    $branch=mysqli_real_escape_string($con,$_POST['branch']);
    $rollno=mysqli_real_escape_string($con,$_POST['Rollno']);
    $bpassword=password_hash($pass,PASSWORD_DEFAULT);
    $cpassword=password_hash($cpass,PASSWORD_DEFAULT);
 
    
   $emailquery="select * from registration where email='$email'";
   $query=mysqli_query($con,$emailquery);
   $emailcount=mysqli_num_rows($query);
   if($emailcount>0){
    ?>
    <script>
    alert("Email already exists");
    </script>
    <?php
   }else{
       if($pass==$cpass){
        $insertquery="INSERT INTO registration(fname, lname, pass, cpass, email, phone, branch, rollno) VALUES ('$fname','$lname','$bpassword','$cpassword','$email','$phone','$branch','$rollno')";
       
        $res=mysqli_query($con,$insertquery);
              if($res)
              {
            ?>
            <script>
            alert("Registration is  succesfully");
            </script>
            <?php
             }
             else
             {
             ?>
            <script>
            alert("Registration is not done");
           </script>
            <?php
       
       }
    }
       else{
        ?>
        <script>
        alert("Passwords are not matching");
        </script>
        <?php
       }
    }
        
       }
   




?>