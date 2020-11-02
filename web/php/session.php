<?php 
   session_start(); 

   //Set up all the $_SESSION valiables 
   if(!isset($_SESSION["Active_Login"]))
   {
      $_SESSION["Active_Login"] = false;
   }
?>