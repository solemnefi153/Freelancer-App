<?php include '../php/session.php';    ?>
<!DOCTYPE html>
<html>
    <head>
       <title>Client Portal</title>
    </head>
    <body>
        <header>
            <span>LOGO</span>
            <?php echo "<spam>" .  $_SESSION["user_name"] . " " . $_SESSION["user_last_name"] . "</spam>";?>
            <a href="./client_portal.php">Home</a>
        </header>
        <br><br>
        <main>
            <div id='Controls'>
                    <span><?php $_SESSION['organization'] ?><span>
                    <br><br>
                    <button >Current Projects</button>
                    <br><br>
                    <button >Finished Projects</button>
                    <br><br>
            </div>
            <div id='content'></div>      
        </main>
        <footer>
        </footer>
    </body>
</html>