<?php include '../php/session.php';    ?>
<!DOCTYPE html>
<html>
    <head>
       <title>Admin Portal</title>
       <script src="../js/process_login.js"></script>
    </head>
    <body>
        <header>
            <span>LOGO</span>
            <?php echo "<spam>" .  $_SESSION["user_name"] . " " . $_SESSION["user_last_name"] . "</spam>";?>
            <a href="./home.php">Home</a>
        </header>
        <br><br>
        <main>
            <div id='Controls'>
                <!--This select statement will be populated with a query from the datavase -->
                <select id='organization_selected'>
                    <option value='none'>- - -</option>
                    <option value='Master'>Master</option>
                    <option value='The Best Client'>The Best Client</option>
                </select>                    <button id='search_organization'>Go</button>
                <br><br>
                <button >Create New Client</button>
                <br><br>
                <button>View My Services</button>
                <br><br>
                <button>Create New Service</button>
                <br><br><br><br>
            </div>
            <div id='content'>
            </div>      
        </main>
        <footer>
        </footer>
    </body>
</html>