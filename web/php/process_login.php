<?php include "session.php"; ?>
<?php include './db_access.php' ?>
<?php include './test_input.php' ?>

<?php
        #Attempt to login 
        
        #Grab the username and password submited in the form
        $username = test_input($_POST['username']);
        $password = test_input($_POST['password']);

        #Create variable to store the status of this request
        $login_status = "";

        #Verify That username and password have been provided
        if($username == '' || $password == '' ) {
            $login_status = "Provide username and passowrd";
        }
        #If they were provided attempt to login
        else{
            try{
                #Check if the username exists in the database
                $stmt = $db->prepare('SELECT username, password FROM users WHERE username=:username');
                $stmt->bindValue(':username', $username, PDO::PARAM_INT);
                $stmt->execute();
                $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
               //Check if the user was found
               if(sizeof($user) == 1)
               { 
                    //Check if the password in the database is consistent with the password that was provided
                    if(password_verify($password, $user[0]['password']))
                    {
                        $login_status = 'true';
                        $_SESSION['username'] = $user[0]['username'];
                        $_SESSION['active_login'] = true;
                        $_SESSION['role'] = 'customer';
                    }
                    else
                    {
                        $login_status = "Invalid credentials";
                    }
                }
                else{
                    $login_status = "Invalid credentials";
                }
            }
            catch (PDOException $ex)
            {
                #Save the error in the account_creation_status variable
                #This is very helpful for debugging
                $login_status = 'Error!: ' . $ex->getMessage();
            }
        }
        #Send back the status of the request
        echo $login_status;
?>

