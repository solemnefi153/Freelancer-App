<?php include "test_input.php"; ?>
<?php

    #Here we will call the database and check if we have valid credentials

    $_SESSION["user_id"] = 001;
    $_SESSION["active_login"] = true;
    $_SESSION["role"] = "admin";

    $bool = true;
    echo json_encode($bool);   

?>

