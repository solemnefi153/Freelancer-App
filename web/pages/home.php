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
            <?php echo "<spam>" .  $_SESSION["user_name"] . " " . $_SESSION["user_last_name"] . "</spam>";?>
            <a href="./home.php">Home</a>

        </header>
        <br><br>

        <main>
                <?php
                if($_SESSION["role"] == "admin"){
                    #This select statement will be populated with a query from the datavase
                    echo "<select>";
                    echo "    <option value='none'>- - -</option>";
                    echo "    <option value='Master'>Master</option>";
                    echo "    <option value='The Best Client'>The Best Client</option>";
                    echo "</select>";
                    echo "<button>Go</button>";
                    echo "<br><br>";
                    echo "<button >Create New Client</button>";
                    echo "<br><br>";
                    echo "<button>View My Services</button>";
                    echo "<br><br>";
                    echo "<button>Create New Service</button>";
                    echo "<br><br><br><br>";
                }
                else if($_SESSION["role"] == "client")
                {
                    echo "<span>" . $_SESSION['organization'] . "<span>";
                    echo "<br><br>";
                    echo "<button >Current Projects</button>";
                    echo "<br><br>";
                    echo "<button >Finished Projects</button>";
                    echo "<br><br>";
                }

                ?>


                




        </main>

        <footer>

        </footer>
    </body>
</html>