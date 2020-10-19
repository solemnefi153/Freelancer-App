<?php include "session.php"; ?>
<?php include "test_input.php"; ?>
<?php

    #Here we will call the database and check if we have valid credentials
    $username = test_input($_POST["username"]);
    $password = test_input($_POST["password"]);

    $stmt = $_SESSION['db']->prepare('SELECT * FROM Users WHERE username=:username AND password=:password');
    $stmt->execute(array(':username' => $username, ':password' => $password));
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if(count($rows) == 1)
    {
        foreach($rows as $row)
        {
            $_SESSION["user_id"] = $row["user_id"];
            $_SESSION["active_login"] = true;
            $_SESSION["user_name"] = $row["user_name"];
            $_SESSION["user_last_name"] = $row["user_last_name"];
            $_SESSION["organization"] = $row["organization"];
            $_SESSION["role"] = $row["role"];
            $login_report = array("login_successful" => true, "role" => $row["role"]);
        }
    }
    else
    {
        $login_report = array("login_successful" => false, "role" =>"none");
    }
    echo json_encode($login_report);   
?>

