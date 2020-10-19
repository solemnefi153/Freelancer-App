<?php include "session.php"; ?>
<?php include "test_input.php"; ?>
<?php

    #Here we will call the database and check if we have valid credentials
    $username = test_input($_POST["username"]);
    $password = test_input($_POST["password"]);


    $_SESSION["user_id"] = 001;
    $_SESSION["active_login"] = true;
    $_SESSION["user_name"] = "Nefi";
    $_SESSION["user_last_name"] = "Aguilar";
    $_SESSION["role"] = "admin";

    $bool = true;
    echo json_encode($bool);   

?>

