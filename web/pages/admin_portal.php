<?php include '../php/session.php';    ?>
<!DOCTYPE html>
<html>
    <head>
       <title>Admin Portal</title>
       <script src="../js/admin_portal.js" defer></script>
    </head>
    <body>
        <header>
            <span>LOGO</span>
            <?php echo "<spam>" .  $_SESSION["user_name"] . " " . $_SESSION["user_last_name"] . "</spam>";?>
            <a href="./home.php">Home</a>
        </header>
        <br><br>
        <main>
            <div id='main_controls'>
                <!--This select statement will be populated with a query from the datavase -->
                <select id='organization_selected'>
                    <option value='none'>- - -</option>
                    <option value='Master'>Master</option>
                    <option value='The Best Client'>The Best Client</option>
                </select>                    
                <button id='search_organization_btn'>Go</button>
                <br><br>
                <button id='create_client_btn'>Create New Client</button>
                <br><br>
                <button id='view_services_btn'>View My Services</button>
                <br><br>
                <button id='create_services_btn'>Create New Service</button>
                <br><br><br><br>
            </div>
            <div id='secondaly_controls'>
                
            </div>
            <div id='content_section'>
            </div>      
        </main>
        <footer>
        </footer>
    </body>
</html>