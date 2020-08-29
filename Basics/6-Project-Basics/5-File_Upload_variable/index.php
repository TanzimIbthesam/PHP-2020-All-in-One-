<?php 
if(isset($_FILES['image'])){

echo "<pre>";
print_r($_FILES);
echo "</pre>";
//First find out name of the file image,pdf 
$file_name=$_FILES["image"]["name"];
//find out size of the file
$file_size=$_FILES["image"]["size"];
//temporary location of files
$file_tmp=$_FILES["image"]["tmp_name"];
    //Ltype of file
    $file_type = $_FILES["image"]["type"];
echo $file_name,"<br>";
echo $file_size,"<br>";
echo $file_tmp,"<br>";
echo $file_type,"<br>";
// echo $file_size,"<br>";
if(move_uploaded_file($file_tmp,"image_uploads/".$file_name)){
   echo "Successfully Uploaded";
}else{
echo "Not Uploaded";
}

}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="image" id=""><br>
    <input type="submit" name="submit" value="SEND">
    </form>
</body>
</html>