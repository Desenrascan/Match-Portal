<?php
        $num_info = 0;
        for($val_info = 1; $val_info < $row_info+1; $val_info++) {
            $index = 0;
            $index_info = 0;
            $index_pl = 0;
            $pl = 0;
                
            $db_select_info = "SELECT `name`, `surname`, `phone` FROM `team_player_info` WHERE `order`=".$val_info;
            $result_info = mysqli_query($create_conn, $db_select_info);
            $len = mysqli_num_rows($result_info);
                
            while($row = mysqli_fetch_assoc($result_info)) {
                $info_array[$index++] = $row["name"];
                $info_array[$index++] = $row["surname"];
                $info_array[$index++] = $row["phone"];
            }
                echo '<div id="msg_info'.$num_info.'" class="msg">
                    <span onclick="changeI()">X</span>', PHP_EOL;
                    for($j = 0; $j < $len; $j++) {
                        echo '<div class="wrap"><label>Name: </label><i>'.$info_array[$index_info++].'. </i>', PHP_EOL;
                        echo '<label>Surname: </label><i>'.$info_array[$index_info++].'. </i>', PHP_EOL;
                        echo '<label>Phone: </label><i>'.$info_array[$index_info++].' </i></div>', PHP_EOL;
                    }
                echo '</div>', PHP_EOL;
                $num_info += 4;
        }
?>
