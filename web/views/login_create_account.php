<?php include '../php/session.php'; ?>
<!DOCTYPE html>
<html>
    <head>
       <title>Freelance Project Tracker</title>
       <script src="../js/login_create_account.js" defer></script>
       <link rel="stylesheet" href="../styles/general_styles.css">
       <link rel="stylesheet" href="../styles/header.css" >
       <link rel="stylesheet" href="../styles/login_create_account.css" >
       <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;1,400&display=swap" rel="stylesheet">
    </head>
    <body>
        <header>
            <img id="logo" src="../images/logo.png" /> 
        </header>
        <main>
                <div id='main_group'>
                    <span class='alert' id="login_status"></span>
                    <input type="text" class="text_input" id="username" placeholder="Username" name="username">
                    <input type="password" class="text_input" id="password" placeholder="Password" name="password">
                    <br>
                    <input type="button" class="button main_btn" onclick="login_attempt()" value="Sing In">
                    <br>
                    <span>or</span>
                    <br>
                    <input type="button" class="button seconday_btn" onclick="load_create_account()" value="Sign Up">
                </div>
        </main>
        <footer>
        </footer>
    </body>
</html>