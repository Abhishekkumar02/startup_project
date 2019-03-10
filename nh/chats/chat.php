<?php
                require '../stableconnect.php';
                $id = $_GET["id"];
//print_r($id);
                    $query = "SELECT * FROM chat_info WHERE type = '$id' ORDER BY id DESC";
                    $query_run   = mysqli_query($conn,$query);
                    while($query_row = mysqli_fetch_assoc($query_run)):?>

                <div id ="chat_data">
                </div>
                <span style="color:red;"><?php echo $query_row['name'].' : '; ?></span>
                <span style="font-family:cursive;"><?php echo $query_row['msg']; ?></span>
                <span style = "font-family:cursive;float:right;"><?php echo formatDate($query_row['date']); ?></span>
                
                <?php endwhile; ?>
