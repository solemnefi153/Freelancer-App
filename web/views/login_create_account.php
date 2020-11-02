<?php include '../php/session.php'; ?>
<!DOCTYPE html>
<html>
    <head>
       <title>Freelance Project Tracker</title>
       <script src="../js/login_create_account.js" defer></script>
       <link rel="stylesheet" href="../styles/general_styles.css">
       <link rel="stylesheet" href="../styles/header.css" >
       <link rel="stylesheet" href="../styles/sign_in.css" >
       <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;1,400&display=swap" rel="stylesheet">
    </head>
    <body>
        <header>
            <img id="logo" src="../images/logo.png" /> 
        </header>
        <main>
                <div id='login_group'>
                    <span class='alert' id="login_status"></span>
                    <div id="login_error_message" class='error_message'></div>
                    <input type="text" class="text_input" id="username" placeholder="Username" name="username">
                    <input type="password" class="text_input" id="password" placeholder="Password" name="password">
                    <br>
                    <input type="button" class="button main_btn" onclick="login_attempt()" value="Sing In">
                    <span>or</span>
                    <input type="button" class="button seconday_btn" onclick="" value="Create Account">
                </div>
        </main>
        <footer>
        </footer>
    </body>
</html>