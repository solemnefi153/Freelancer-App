<?php include "session.php"; ?>
<?php include "test_input.php"; ?>
<?php

    #Here we will call the database and check if we have valid credentials
    $username = test_input($_POST["username"]);
    $password = test_input($_POST["password"]);

    $stmt = $_SESSION['db']->prepare('SELECT * FROM users WHERE username=:username AND Password=:Password');
    $stmt->execute(array(':username' => $username, ':password' => $password));
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if(count($rows) == 1)
    {
        foreach($rows as $row)
        {
            $_SESSION["role_id"] = $row["role_id"];
            $_SESSION["active_login"] = true;
            $_SESSION["first_name"] = $row["first_name"];
            $_SESSION["last_name"] = $row["last_name"];
            $_SESSION["organization"] = $row["organization"];
            $_SESSION["role_id"] = $row["role_id"];
            $login_report = array("login_successful" => true, "role_id" => $row["role_id"]);
        }
    }
    else
    {
        $login_report = array("login_successful" => false, "role_id" =>"none");
    }
    echo json_encode($login_report);   
?>

