<html>
<head>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="imageUpload"><br><br>
    <input type="submit" name="submit" value="Upload Image" >
</form>
</body>
</html>
<?php
if(isset($_POST["submit"])){
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["imageUpload"]["name"]);
//uploads/jaspreet.jpg
move_uploaded_file($_FILES["imageUpload"]["tmp_name"], $target_file);

$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check the image file type extension
echo "Image uploaded successfully and extension of the image file is " .$imageFileType;
}
?>