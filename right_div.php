<div id="right_div">
    <table>
        <tr class="right_div-trow">
            <td>Date</td>
            <td>Time</td>
            <td class="right_div-desc">Description</td>
            <td>Num of players</td>
            <td>Players</td>
        </tr>
        <?php 
                        $num = 0;
                        // Database selection
                        $db_select = "SELECT * FROM `create_match`";
                        $db_select_order = "SELECT MAX(`order`) AS order_ FROM `create_match`";
                        // Query results from database
                        $result = mysqli_query($create_conn , $db_select);
                        $result_order = mysqli_query($create_conn , $db_select_order);
                        // Take number of rows each result
                        $row_info = mysqli_num_rows($result);
                        // Take order
                        $order = mysqli_fetch_assoc($result_order);
                        $_order = $order["order_"]; // store in a $_order variable
                        $order_in = ($order["order_"] * 4) - 1; // $order_in variable holds value last created match which will be the id of created div elements hold match's num of players
                        if($_order == "") {
                            $_order = 1;
                            $order_in = 1;
                        }
                        
                        while($row = mysqli_fetch_assoc($result)) {
                            if($row["number"] == 0) { 
                                $disable = "disabled"; $cursor = "not-allowed";
                            }
                                echo '<tr class="right_div-row">
                                          <td>'.$row["date"].'</td>
                                          <td>'.$row["time"].'</td>
                                          <td><div onclick="show(this)" class="right_div-msg" id="msg'.$order_in--.'">'.$row["message"].'</div></td>
                                          <div id="msg'.$order_in--.'" class="msg"><span onclick="change()">X</span><p>'.$row["message"].'</p></div>
                                          <td id="msg'.$order_in--.'" class="num_of_ply" onclick="show_info(this)" name="'.$_order.'">Click to see...</td>
                                          <td>'.$row["number"].'</td>
                                          <td><button name="'.$row["id"].' '.$row["number"].' '.$_order.'"
                                          '.$disable.' style="cursor: '.$cursor.'" onclick="get(this);">Apply</button>
                                      </tr>';
                            $_order--;
                            $order_in--;
                            $disable = "";
                            $cursor = "";
                        }
                    ?>
    </table>
</div>