<?php

include "connection.php";
?>
<?php  
session_start();
?>
<?php

if(!isset($_SESSION['score'])){
    $_SESSION['score']=0;
}
if($_POST){
    $query="select * from  questions";
    $total_questions=mysqli_num_rows(mysqli_query($con,$query));
    $number=$_POST['number'];
    $selected_choice=$_POST['choice'];
    $next=$number+1;
    $query="select * from  options where question_no=$number AND is_correct= 1";
    $result=mysqli_query($con,$query);
    $row=mysqli_fetch_assoc($result);
    $correct_choice=$row['id'];
    if($selected_choice == $correct_choice){
        $_SESSION['score']++;
        $mark="&";

    }else{
        $mark="*";
    }
    if($number== $total_questions){
        header("LOCATION:final.php");
    }
    else{
        header("LOCATION:startexam.php?n=". $next);
    }
}
?>



