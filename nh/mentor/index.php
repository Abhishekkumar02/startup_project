<?php
require "../stableconnect.php";
require "../checkuser.php";

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="../css/bootstrap.min.css">
      <script src="../js/jquery.min.js"></script>
      <script src="../js/bootstrap.min.js"></script>
</head>
<body>

<div class="container-fluid mentor">
  <div class="row">
    <div class="col-md-4">
    <section id="mentor">
        <div class="page-header" >
          <h2>Mentor</h2>
      </div>
      </section>
      </div>
          <div class="col-md-8 z">
      <div class="form-group">
          <label class="col-md-8 control-label">Select Categrey</label>
            <div class="col-md-8 selectContainer">
      <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
      <select name="state" class="form-control selectpicker" >
          <?php
          $query = "SELECT tag FROM tag";
          $query_run = mysqli_query($conn,$query);
          while($query_row = mysqli_fetch_assoc($query_run)){
          echo("<option>".$query_row['tag']."</option>");
          }
          ?>
         </select>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="container" id="data">

</div>
<style>
.page-header{
border-bottom: none;
}
</style>

<script>
$('select').on('change', function() {
loadmentor(this.value);
})

function loadmentor(tye){
  $("#data").text("");
$.ajax({url: 'loadmentor.php?id='+tye, success: function(result){
console.log(result)
$("#data").append(result);
}});
}
</script>

</body>
</html>
