<?php 
   session_start(); 

   //Set up all the $_SESSION valiables 
   if(!isset($_SESSION["Active_Login"]))
   {
      $_SESSION["Active_Login"] = false;
   }
   if(!isset($_SESSION["db"]))
   {
      try
      {
         $dbUrl = getenv('DATABASE_URL');

         $dbOpts = parse_url($dbUrl);
       
         $dbHost = $dbOpts["host"];
         $dbPort = $dbOpts["port"];
         $dbUser = $dbOpts["user"];
         $dbPassword = $dbOpts["pass"];
         $dbName = ltrim($dbOpts["path"],'/');
       
         $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
       
         $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       
         $_SESSION['db'] = $db;
      }
      catch (PDOException $ex)
      {
         echo 'Error!: ' . $ex->getMessage();
         die();
      }
   }
?>