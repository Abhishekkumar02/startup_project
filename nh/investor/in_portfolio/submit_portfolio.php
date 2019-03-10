<?php
require "../../stableconnect.php";
require "../in_checkuser.php";

if ($loggedin){
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $id =$_SESSION["in_useremailgov"];
	    $uname=$_POST["name"];
	    $uname=mysqli_real_escape_string($conn,$uname);
        $email=$_POST["email"];
        $email=mysqli_real_escape_string($conn,$email);
        $phone=$_POST["phone"];
        $phone=mysqli_real_escape_string($conn,$phone);
        $address = $_POST['address'];
        $introduction = $_POST['introduction'];
        $description = $_POST['description'];
        $phrase = $_POST['phrase'];

        $p = uploadImage();

        if($p==""){$photo_url = "";}
        else{$photo_url = $p;}


        print_r($introduction);

        $sql = "SELECT * from in_portfolio_details WHERE portfolio_id = '$id'";

        $result = mysqli_query($conn,$sql);
        if (mysqli_num_rows($result) > 0){
            $sql_query="UPDATE in_portfolio_details SET intro = '$introduction',about = '$description',name ='$uname' ,email = '$email',phrase = '$phrase',address = '$address',photo_url = '$photo_url',type = 0,phone = '$phone' WHERE portfolio_id = '$id'";
            if(mysqli_query($conn,$sql_query)){
                header('Location: ../index.php');
                exit();
            }
            else{
                echo ("error in generating");
           }
        }
        else{
            $sql_query="INSERT INTO in_portfolio_details(intro,about,portfolio_id,name,email,phrase,address,photo_url,type,phone) VALUES('$introduction','$description','$id','$uname','$email','$phrase','$address','$photo_url',0,'$phone')";
            if(mysqli_query($conn,$sql_query)){
                header('Location:../index.php');
            }
            else{
                echo ("error in generating");
           }
        }


    }
}


function uploadImage(){ 
$target_dir = "uploads";
$target_file = $target_dir . basename($_FILES["pic"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $check = getimagesize($_FILES["pic"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
    // Check if file already exists
/*    if (file_exists($target_file)) {
     echo "Sorry, file already exists.";
    $uploadOk = 0;
    return "";
}*/
// Check file size
if ($_FILES["pic"]["size"] > 500000) {
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
        if (move_uploaded_file($_FILES["pic"]["tmp_name"], $t.".".$imageFileType)) {
        echo "The file ". basename( $_FILES["pic"]["name"]). " has been uploaded in ".$target_file." folder";
        return $t.".".$imageFileType;
    } else {
        echo "Sorry, there was an error uploading your file.";
        return "";
    }
}

}




?>
