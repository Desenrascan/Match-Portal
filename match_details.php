<?php

    if($date != "" && $time != "" && $message != "" && ($number >=5 && $number <=9)) {
          
          $db_select_order = "SELECT MAX(`order`) AS order_ FROM `create_match`";
          
          if(!mysqli_query($create_conn, $db_select_order)) {
              $ix_ = 1;
          } else {
                $res = mysqli_query($create_conn, $db_select_order);
                $row = mysqli_fetch_assoc($res);
                $ix_ = ($row["order_"] + 1);
          }
          
          // Insert into created match detailes into database
          $db_insert = "INSERT INTO `create_match` (`date`,`time`,`message`,`number`,`number_store`,`order`) 
                VALUES ('".$date."','".$time."','".$message."','".$number."','".$number."','".$ix_."')";
          mysqli_query($create_conn, $db_insert);
      }

?>