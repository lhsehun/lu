<?php
   define("URL","/user/");
   if(empty($_COOKIE['admin_user'])){
   	 header("location:".URL.'login.php');
   }
?>