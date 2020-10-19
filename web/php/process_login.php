<?php include "session.php"; ?>
<?php include "test_input.php"; ?>
<?php

    #Here we will call the database and check if we have valid credentials
    $username = test_input($_POST["username"]);
    $password = test_input($_POST["password"]);

    $stmt = $_SESSION['db']->prepare('SELECT * FROM Users WHERE Username=:Username AND Password=:Password');
    $stmt->execute(array(':Username' => $username, ':Password' => $password));
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if(count($rows) == 1)
    {
        foreach($rows as $row)
        {
            $_SESSION["User_ID"] = $row["User_ID"];
            $_SESSION["Active_Login"] = true;
            $_SESSION["First_Name"] = $row["First_Name"];
            $_SESSION["Last_Name"] = $row["Last_Name"];
            $_SESSION["Organization"] = $row["Organization"];
            $_SESSION["Role_ID"] = $row["Role_ID"];
            $login_report = array("login_successful" => true, "Role_ID" => $row["Role_ID"]);
        }
    }
    else
    {
        $login_report = array("login_successful" => false, "Role_ID" =>"none");
    }
    echo json_encode($login_report);   
?>

