<?php
require "../checkuser.php";
if(!$loggedin){
	header("location:../signin.php");
}
require "../stableconnect.php";
$id =$_SESSION["useremailgov"];

$sql = "SELECT * from portfolio_details WHERE portfolio_id = '$id'";
$product = "SELECT * from portfolio_product_details WHERE portfolio_id = '$id'";

$result = mysqli_query($conn,$sql);
$product_result = mysqli_query($conn,$product);

if (!(mysqli_num_rows($result) > 0)){
	//echo("No Portfolio exist");
	//return;
}

$data = mysqli_fetch_assoc($result);
$data2 = mysqli_fetch_all($product_result,MYSQLI_ASSOC);

$name = $data['name'];
$email = $data['email'];
$about = $data['about'];
$phrase = $data['phrase'];
$address = $data['address'];
$intro = $data['intro'];
$phone = $data['phone'];
$url = $data['photo_url'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Portfolio Maker</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="vendor/noui/nouislider.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" action="submit_portfolio.php" method="POST" enctype="multipart/form-data">
				<span class="contact100-form-title">
					Generate Portfolio
				</span>

				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
					<span class="label-input100">FULL NAME *</span>
					<input required  class="input100" type="text" name="name" value="<?php echo($name) ?>" placeholder="Enter Your Name">
				</div>

				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Enter Your Email (email@a.x)">
					<span class="label-input100">Email *</span>
					<input required  class="input100" type="text" name="email" value="<?php echo($email) ?>" placeholder="Enter Your Email ">
				</div>

				<div class="wrap-input100 bg1 rs1-wrap-input100">
					<span class="label-input100">Phone</span>
					<input required  class="input100" type="text" name="phone" value="<?php echo($phone); ?>" placeholder="Enter Number Phone">
				</div>


				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Address">
					<span class="label-input100">Address *</span>
					<input required  class="input100" type="text" name="address" value="<?php echo($address); ?>" placeholder="Enter Your Address">
				</div>

				<div class="wrap-input100 bg1">
					<span class="label-input100">Photo *</span>
					<input required  class="input100" type="file" name="pic" placeholder="Portfolio Pic">
				</div>

				<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Message">
					<span class="label-input100">Introduction</span>
					<textarea class="input100" name="introduction" placeholder="Introduction here..."><?php echo($intro); ?></textarea>
				</div>

				<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Message">
					<span class="label-input100">Description</span>
					<textarea class="input100" name="description" placeholder="Description here..."><?php echo($about); ?></textarea>
				</div>

				<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Message">
					<span class="label-input100">Phrase</span>
					<input required  class="input100" name="phrase" placeholder="Phrase here..." value="<?php echo($phrase); ?>"></textarea>
				</div>
				<div class="container-contact100-form-btn">
					<button type="button" class="contact100-form-btn" data-toggle="modal" data-target="#add_product">
						<span>
							ADD
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>

				<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Message">
				<table class="table">
					<thead class="thead-dark">
						<tr>
							<th scope="col">Product Name</th>
							<th scope="col">Product About</th>
						</tr>
					</thead>
					<tbody>
					<?php
					$c = 0;
					$coun = count($data2);
					while($c<$coun){
						echo('<tr>
							<th scope="row">'.$data2[$c]['product_name'].'</th>
							<td>'.$data2[$c]['about'].'</td>
						</tr>');
						$c=$c+1;
					}
					?>
					</tbody>
				</table>
				</div>
				<div class="container-contact100-form-btn">
					<button type="submit" class="contact100-form-btn">
						<span>
							Submit
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>

	<div class="modal fade" id="add_product" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">ADD PRODUCT</h4>
				</div>
				<div class="modal-body">
					<p>PRODUCT NAME</p>
					<form name="photo" id="imageUploadForm" enctype="multipart/form-data" action="add_product.php" method="post">

					<div class="wrap-input100 bg0">
					<input required  class="input100" id="product_p_name" name="product_name" placeholder="Product Name"></textarea>
					</div>

					<p>PRODUCT DESCRIPTION</p>
					<div class="wrap-input100 bg0">
					<textarea class="input100" id="product_p_info" name="product_info" placeholder="Introduction here..."></textarea>
					</div>

					<p>PRODUCT Image</p>
					<div class="wrap-input100 bg0">
					<input required  class="input100" type="file" id="ImageBrowse" name="product_image" placeholder="Product Pic"/>
					</div>

					<div class="container-contact100-form-btn">
					<button type="button" class="contact100-form-btn">
						<span>
							<input required  type="submit" name="upload" value="Add" />
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
					</form>

				</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>




	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});


			$(".js-select2").each(function(){
				$(this).on('select2:close', function (e){
					if($(this).val() == "Please chooses") {
						$('.js-show-service').slideUp();
					}
					else {
						$('.js-show-service').slideUp();
						$('.js-show-service').slideDown();
					}
				});
			});
		})
	</script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="vendor/noui/nouislider.min.js"></script>
	<script>
	    var filterBar = document.getElementById('filter-bar');

	    noUiSlider.create(filterBar, {
	        start: [ 1500, 3900 ],
	        connect: true,
	        range: {
	            'min': 1500,
	            'max': 7500
	        }
	    });

	    var skipValues = [
	    document.getElementById('value-lower'),
	    document.getElementById('value-upper')
	    ];

	    filterBar.noUiSlider.on('update', function( values, handle ) {
	        skipValues[handle].innerHTML = Math.round(values[handle]);
	        $('.contact100-form-range-value input[name="from-value"]').val($('#value-lower').html());
	        $('.contact100-form-range-value input[name="to-value"]').val($('#value-upper').html());
	    });
	</script>
	<script src="js/main.js"></script>
	<script>
function closeit(){
   $('#add_product').modal('toggle');
}
		$(document).ready(function (e) {
    $('#imageUploadForm').on('submit',(function(e) {
        e.preventDefault();
        var formData = new FormData(this);

        $.ajax({
            type:'POST',
            url: $(this).attr('action'),
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(data){
                closeit();
                console.log("success");
                console.log(data);
            },
            error: function(data){
                console.log("error");
                console.log(data);
            }
        });
    }));

    $("#ImageBrowse").on("change", function() {
        $("#imageUploadForm").submit();
    });
});

		/*function addproduct(){
			var name = document.getElementById("product_p_name").value;
			var des = document.getElementById("product_p_info").value;
			$.ajax({
				method: 'get',
				url: 'add_product.php',
				data: {
					'name': name,
					'des': des
				},
				success: function(data) {
					alert("done")
				}
			});
		}*/
	</script>


</body>
</html>
