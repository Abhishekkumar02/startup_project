<?php
require "stableconnect.php";
require "beginit.php";
$finalpr=0;
?>

<section >

<div class="container-fluid div34">
 <div id="maintable">
<h2 class="text-center" style="color:dodgerblue"> News</h2>
	<br>
<div class=" div456">
<?php


$sql_query="SELECT * FROM news_details  order by (id) desc limit 10";
$result_query=mysqli_query($conn,$sql_query);
 mysqli_num_rows($result_query);
if(mysqli_num_rows($result_query)>0)
{
	while($row_query0=mysqli_fetch_assoc($result_query))
	{
		?>
		 <div class="container-fluid divmcr2" >
	            <div class="mcr">
								<h3><?php echo $row_query0['title'];?></h3>
					<p><?php echo $row_query0['msg'];?></p>
					<h4><?php echo $row_query0['date'];?></h4>
				</div>
	       </div>

		<?php
	}
	?>
	<?php
}
else echo '<h4 class="text-center">No News are found</h4>';

?></div></div></div>

</section>

<?php
require "footer.php";?>
</body>
