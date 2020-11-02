<?php
   session_start();
?>

<?php include './db_access.php' ?>
<?php include './test_input.php' ?>
<?php
    #Grab the information submited through the form
    $role_id = (int)test_input($_POST['role_id']);
    $user = test_input($_POST['username']);
    $password = test_input($_POST['password']);
    $password = password_hash($password, PASSWORD_DEFAULT);
    $organization = test_input($_POST['organization']);
    $first_name = test_input($_POST['first_name']);
    $last_name = test_input($_POST['last_name']);
    $phone = test_input($_POST['phone']);
    $email = test_input($_POST['email']);

    echo $user;
    
    #Create variable to store the status of this request
    $account_creation_status = "";

    try{
        #check if the username already exists in the database
        $stmt = $db->prepare('SELECT username FROM users WHERE username=:username');
        $stmt->bindValue(':username', $user, PDO::PARAM_STR);
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        #check if the username is as used by another person
        if(sizeof($rows) != 1)
        {
            echo "Username already exists";
            echo sizeof($rows);
            die();
        }
    }
    catch (PDOException $ex)
    {
        #echo if there are any errors in the database
        #This is very helpful for debugging
        echo  'Error!: ' . $ex->getMessage();
        die();
    }

    #If the username does not exist attempt to create the username
    try
    {
        #Create the username in the database
        $stmt = $db->prepare("INSERT INTO users (user_id, role_id, username, password, organization, first_name, last_name, phone_number, email) VALUES ( nextval('users_sequence'), :role_id, :username, :password, :organization, :first_name, :last_name, :phone_number, :email);");
        $stmt->bindValue(':role_id', $role_id, PDO::PARAM_INT);
        $stmt->bindValue(':username', $username, PDO::PARAM_STR);
        $stmt->bindValue(':password', $password, PDO::PARAM_STR);
        $stmt->bindValue(':organization', $organization, PDO::PARAM_STR);
        $stmt->bindValue(':first_name', $first_name, PDO::PARAM_STR);
        $stmt->bindValue(':last_name', $last_name, PDO::PARAM_STR);
        $stmt->bindValue(':phone_number', $phone_number, PDO::PARAM_STR);
        $stmt->bindValue(':email', $email, PDO::PARAM_STR);
        $stmt->execute();
        $account_creation_status = "true";
    }
    catch (PDOException $ex)
    {
        #Save the error in the account_creation_status variable
        #This is very helpful for debugging
        $account_creation_status = 'Error!: ' . $ex->getMessage();
    }
  
    
    #Send back the status of the request
    echo $account_creation_status;
?>