<?php include './php/session.php'; ?>

<?php
   if($_SESSION['active_login'] != true)
   {
      #If there is not an active session then redirect to the login page
      header ("Location: https://freelancer-path.herokuapp.com/views/login_create_account.php");
   }
   else{
      #if there is an active session check if the session is for a client or an admin 

      #redirect to the admin porta

      #redirect to the client portal 
   }
?>