<?php include '../php/session.php'; ?>
<!DOCTYPE html>
<html>
    <head>
       <title>Freelance Project Tracker</title>
       <script src="../js/process_login.js"></script>
    </head>
    <body>
        <header>
            <img src="../images/logo.phg" /> 
        </header>
        <main>
                <div id='login_group'>
                    <div id="login_error_message" class='error_message'></div>
                    <label for="username">Username</label>
                    <input id="username" name="username" type="text" required>
                    <label for="password">Password</label>
                    <input id="password" name="password" type="text" required>
                    <button onclick="login_attempt()" >Sing In</button>
                </div>
        </main>
        <footer>
        </footer>
    </body>
</html>