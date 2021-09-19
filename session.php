<?php
   include('config.php');
   
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select user from teacher where user = '$user_check' ");
   
   if(!isset($_SESSION['login_user'])){
      header("location:first.php");
   }
      
?>
