<?php

    if($name != "" && $surname != "" && $telephone != "") {
        // Take details about clicked apply button for the match
        $id = $_COOKIE["id"];
        $num = $_COOKIE["num"];
        $id_ = $_COOKIE["id_"];  
        
        $db_insert_info = "INSERT INTO `team_player_info`(`name`,`surname`,`phone`,`order`) 
              VALUES ('".$name."','".$surname."','".$telephone."','".$id_."')";
//        $db_date = "SELECT `date` FROM `create_match`";
//        $result_date = mysqli_query($create_conn, $db_date);
        
        if(mysqli_query($create_conn, $db_insert_info)) {
                $num--;
            if($num < 0) {
                // do nothing, show alert with js
            } else {
                $db_update_info_on_creatMatch = 
                    "UPDATE `create_match` SET `number`='".$num."' WHERE `id`=".$id;
                mysqli_query($create_conn, $db_update_info_on_creatMatch);
            }
        }
      }

?>