<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<title>Admin registeration</title>
</head>
<style>
    .note
{
    text-align: center;
    height: 80px;
    background: -webkit-linear-gradient(left,blue, #8811a5);
    color: #fff;
    font-weight: bold;
    line-height: 80px;
}
.form-content
{
    padding: 5%;
    border: 1px solid #ced4da;
    margin-bottom: 2%;
    background: white;
}
.container{
    padding:100px;
}
.form-control{
    border-radius:1.5rem;
}
.btnSubmit
{
    border:none;
    border-radius:1.5rem;
    padding: 1%;
    width: 20%;
    cursor: pointer;
    background: maroon;
    color: #fff;
}
body{
    background: -webkit-linear-gradient(left, green,  #200dcfc0);
}
p{
    font-size:20px;
}
@media only screen and (max-width: 640px) and (min-width:360px) {
    .container{
    padding:30px;
}
.btnSubmit
{
    border:none;
  
    padding: 1%;
    width: 30%;
    cursor: pointer;
    background: maroon;
    color: #fff;
}
}
@media only screen and (max-width: 678px) and (min-width:425px) {
    .container{
    padding:30px;
}
.btnSubmit
{
    border:none;
    
    padding: 1%;
    width: 30%;
    cursor: pointer;
    background: maroon;
    color: #fff;
}
}
@media only screen and (max-width: 570px) and (min-width:320px) {
    .container{
    padding:30px;
}
.btnSubmit
{
    border:none;
   
    padding: 1%;
    width: 30%;
    cursor: pointer;
    background: maroon;
    color: #fff;
}
}
    </style>
<body>
<div class="container register-form">
            <div class="form">
                <div class="note">
                    <p>Online exam portal</p>
                </div>

                <div class="form-content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control"name="name" placeholder="Enter the  name *" value=""/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"name="email" placeholder="Enter the email *" value=""/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="password"placeholder="Enter the Password *" value=""/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"name="cpassword" placeholder="Confirm Password *" value=""/>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btnSubmit">Register</button>
                </div>
            </div>
        </div>
</body>
</html>