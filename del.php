<?php
 include "connection.php";
 $id=$_GET['id'];
 $deletequery="DELETE FROM `registration` WHERE id=$id";
 $query=mysqli_query($con,$deletequery);
 if($query){
     ?>
     <script>
     alert("deleted successfully");
     </script>
     <?php
 }
 else{
    ?>
     <script>
     alert("deletion is not done");
     </script>
     <?php
 }
 header('location:display.php');
?>