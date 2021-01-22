<?php
include "connection.php";
$question_no=$_POST['question_no'];


$deletequery="DELETE FROM `questions` WHERE question_no=$question_no";
$res=mysqli_query($con,$deletequery);
if($res){
    $query="DELETE FROM `options` WHERE question_no=$question_no ";
    $del=mysqli_query($con,$query);
    
   if($del){
    ?>
    <script>
    alert("deletion is succcessfull");
    </script>
    <?php
   } else{
    ?>
    <script>
    alert("no deletion is done");
    </script>
    <?php

   }  
      
    }



header('location:delete.php')
?>