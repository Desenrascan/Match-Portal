<?php
    $servername = "localhost";
    $database_name = "team_match";
    $login = "root";
    $password = "idris";

    $create_conn = mysqli_connect($servername, $login, $password, $database_name);

    if(!$create_conn)  die("Connection failed: ".mysqli_connect_error());
?>