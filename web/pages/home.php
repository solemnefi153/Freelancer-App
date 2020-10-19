<?php include '../php/session.php';    ?>
<!DOCTYPE html>
<html>
    <head>
       <title>Home Page</title>
       <script src="../js/process_login.js"></script>
    </head>
    <body>
        <header>
            <span>LOGO</span>
        </header>
        <main>
                <div id="login_error_message"></div>
                <label for="username">Username</label>
                <input id="username" name="username" type="text" required>
                <label for="password">Password</label>
                <input id="password" name="password" type="text" required>
                <button onclick="login_attempt()" >Sing In</button>
        </main>
        <footer>

        </footer>
    </body>
</html>