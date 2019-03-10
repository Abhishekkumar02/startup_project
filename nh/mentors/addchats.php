[A<?php
                   // if(isset($_POST['message']))
                   // {
                        $name = "SESSION_KEY";
//                        echo $name;
                        $message = $_POST['message'];
                         $message;
                        $id = $_GET['id'];
                        $query_1 = "INSERT INTO chat_info (name,msg,type) VALUES ('$name','$message','$id')";
//echo($query_1);
                        if(mysqli_query($con,$query_1))
echo "kk";
else
echo mysqli_error($con);
                        if($query_run)
                        {
                        echo "dd";   // echo "<audio src = 'sound/134332-facebook-chat-sound.mp3' hidden = 'true' autoplay = 'true' /></audio>";
                        }

                   //}
?>
