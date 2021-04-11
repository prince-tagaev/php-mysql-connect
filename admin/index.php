<?php
$connect = include('dbconfig.php');
$data_connect = mysqli_connect($host,$username,$password,$data_base);
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $file = $_FILES['file']['name'];

    // $insert =$connect . "insert into books values('NULL','$name','$file')";
    if(mysqli_query($data_connect, "insert into books values('NULL','$name','$file')")){
        move_uploaded_file($_FILES['file']['tmp_name'], "../files-data/$file");
        echo "<script>alert('File Has Been Uploaded to Folder')</script>";

    }
    else{
        echo "<script>alert('File Does Not Uploaded to Folder')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php include "../navbar2.php" ?>

<div class="wrapper">
<div class="container">
<form action="index.php" method="post" enctype="multipart/form-data">
<label>Name:</label>
<input type="text" name="name">
<br>
<label>Select file:</label>
<input type="file" name="file">
<br>
<input type="submit" name="submit" value="Upload The File">
</form>
</div>
</div>
</body>
</html>