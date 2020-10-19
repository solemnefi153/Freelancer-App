<?php 
   session_start(); 

   if(!isset($_SESSION["active_login"]))
   {
      $_SESSION["active_login"] = false;
   }
?>