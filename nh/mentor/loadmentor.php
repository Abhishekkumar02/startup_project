<?php
require "../stableconnect.php"; 
                $id = $_GET["id"];
                    $query = "SELECT * FROM mentor_details WHERE type = '$id'";
                    $query_run   = mysqli_query($conn,$query);
                    while($query_row = mysqli_fetch_assoc($query_run)){
echo('<div class="col-md-3 col-sm-6 hero-feature z1">
<div class="card thumbnail">
    <img src="images/default.png" alt="" style="width:60%">
  <h1>'.$query_row['name'].'</h1>
  <p class="title">'.$query_row['about'].'</p>
  <div style="margin: 24px 0;">
    <p><button class="viewbtn" class="profile-btn"><a href="../mentors/mentorchat.php?id='.$query_row['uid'].'">Start Chat</a></button>
    </p>
</div>

 </div>
</div>
</div>
');
}
?>
