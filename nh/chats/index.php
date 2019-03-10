<?php
    include '../stableconnect.php';
?>
<!DOCTYPE html>
<html>
<head>
<!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="style.css">

    </head>
<body onload= "ajax(); ">

<div class="container" style="" >
<div class="row">
<div id="chat" class="col-sm-12">
</div>
</div>
<div class="row">
<div class="col-sm-12">
<form method = "post" action="index.php?id=<?php echo($_GET['id']); ?>" class="form-horizontal" style="margin-top:150px;">
          <div class="form-group">
              <div class = "col-sm-12">
                <textarea name = "message" class="form-control" rows="2" id="message"></textarea>
              </div>
          </div>
          <div class="form-group">
            <div class="col-sm-12">
              <button type="" onclick="" name = "submit" class="btn btn-primary" style="width:100%;">Send it !</button>
            </div>
          </div>
        </form>
</div>
</div>
</div>
                <?php
                    if(isset($_POST['message']))
                    {
                        $name = "SESSION_KEY";
//                        echo $name;
                        $message = $_POST['message'];
//                        echo $message;
                        $id = $_GET['id'];
                        $query_1 = "INSERT INTO chat_info (name,msg,type) VALUES ('$name','$message','$id')";
                        $query_run = mysqli_query($conn,$query_1);

                        if($query_run)
                        {
                            echo "<audio src = 'sound/134332-facebook-chat-sound.mp3' hidden = 'true' autoplay = 'true' /></audio>";
                        }
                   }
                ?>
    </body>
    <script>




  function ajax(id)
    {
chat_url = "chat.php?id="+id;
    $.ajax({url: chat_url, success: function(result)
        {
            $("#chat").html(result);
        }});

    }

    setInterval(function(){ajax('<?php echo($_GET['id']); ?>');},1000);


</script>

</html>
