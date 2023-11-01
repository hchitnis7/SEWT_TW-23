<?php
   include('connect.php');
   session_start();
   $db = mysqli_select_db($conn,'samp');
   $_SESSION['userid'] = "admin";

   $_SESSION['password'] = "123";

   if(!isset($_SESSION['login'])){
      header("Location:login.php");
    }
?>