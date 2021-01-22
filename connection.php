<?php

// $username="epiz_27679333";
// $password="5JpgeUHSgAQJt";
// $server="sql103.epizy.com";
// $db="epiz_27679333_onlineexamportal";
$username="root";
$password="";
$server="localhost";
$db="onlineexam";
$con = mysqli_connect($server,$username,$password,$db);
if($con){
    //echo "connection successful";
   
}
else{
    echo "no connection";
   
}





?>