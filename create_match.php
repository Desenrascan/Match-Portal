<?php 
    if($_SERVER["REQUEST_METHOD"] == "GET") {
      include "database_conn.php";
      include "all_get_variables.php";
      include "match_details.php";
      include "add_players.php";    
        
    }
?>

<html>
    <head>
        <meta charset="utf-8" />
        <title>Games</title>
        <link rel="icon" href="img/eight-ball-icon.png" />
        <link rel="stylesheet" href="match.css" />
        <link href="https://fonts.googleapis.com/css?family=Gugi|Stylish|EB+Garamond" rel="stylesheet">
        <script defer src="match.js"></script>
    </head>
    <body>
        <h1>Let's play the game!</h1>
        <div id="container">
        <?php include "left_div.php"; ?>
        <?php include "right_div.php"; ?>    
        </div>
        
<!--     The team player's name, surname, phone section  -->
        <div id="mid_div">
            <span onclick="change_info()">X</span>
            <form action="" method="GET">
                <div class="mid_div-top">
                    <label>Name:</label>
                    <input type="text" name="name" placeholder="Jhon" required/>
                </div>
                <div class="mid_div-mid">
                    <label>Surname:</label>
                    <input type="text" name="surname" placeholder="Hashley" required/>
                </div>
                <div class="mid_div-bottom">
                    <label>Phone:</label>
                    <input type="tel" name="telephone" placeholder="515739004" required/>
                </div>
                <input type="submit" name="add" value="Add" class="mid_div-submit" />
            </form>
        </div>
        
<!--    Display number of players for the match    -->
        <?php include "display_num_of_players.php"; ?>
    </body>
</html>