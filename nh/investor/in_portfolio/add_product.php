<?php
require "../stableconnect.php";
require "../in_checkuser.php";

if(!$loggedin){
	header("location:../in_signin.php");
}

$id =$_SESSION["in_useremailgov"];
$pname=$_GET["name"];
$pname=mysqli_real_escape_string($conn,$pname);
$des=$_GET["des"];
$des=mysqli_real_escape_string($conn,$des);

try {
$p = uploadImage();
} catch (Exception $e) {
$p = "";
}


$sql_query="INSERT INTO in_portfolio_product_details(product_name,about,portfolio_id,product_image_url) VALUES('$pname','$des','$id','$p')";
if(mysqli_query($conn,$sql_query)){
    echo($a);
}
else{

}

function uploadImage(){ 
    $target_dir = "uploads";
    $target_file = $target_dir . basename($_FILES["product_image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $check = getimagesize($_FILES["product_image"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
        // Check if file already exists
        if (file_exists($target_file)) {
         echo "Sorry, file already exists.";
        $uploadOk = 0;

        return "";

    }
/*    else {
        $new_dir = time().$target_file;
        rename($target_file,$new_dir);
        
    }*/
    // Check file size
    if ($_FILES["product_image"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
        return "";
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
        return "";
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
$t = time();
        if (move_uploaded_file($_FILES["product_image"]["tmp_name"], $t.".".$imageFileType)) {
            echo "The file ". basename( $_FILES["product_image"]["name"]). " has been uploaded in ".$target_file." folder";
            return $t.".".$imageFileType;
        } else {
            echo "Sorry, there was an error uploading your file.";
            return "";
        }
    }
}



?>
