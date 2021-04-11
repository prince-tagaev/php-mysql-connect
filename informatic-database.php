<?php
$connect = include('admin/dbconfig.php');
$data_connect = mysqli_connect($host,$username,$password,$data_base);
if(isset($_POST['submit'])){
    $b_name = $_POST['b-name'];
    $b_url = $_FILES['b-url']['name'];
    $b_img = $_FILES['b-img']['name'];
    $b_author = $_POST['b-author'];

    // $insert =$connect . "insert into books values('NULL','$name','$file')";
    if(mysqli_query($data_connect, "insert into informatic values('NULL','$b_name','$b_url','$b_img','$b_author')")){
        move_uploaded_file($_FILES['b-url']['tmp_name'], "informatic-books/$b_url");
        move_uploaded_file($_FILES['b-img']['tmp_name'], "informatic-books-images/$b_img");
        echo "<script>alert('Book Has Been Uploaded to Folder')</script>";

    }
    else{
        echo "<script>alert('Book Does Not Uploaded to Folder')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/asaba-logo.png"> 
</head>
<body class="bg-secondary p-3">
<div class="container bg-white wrapper p-3">
<?php include "navbar.php" ?>

<div class="wrapper">
<div class="container">
<form action="informatic-database.php" method="post" enctype="multipart/form-data">
<div class="form-group">
<label>Book Name:</label>
<input type="text" name="b-name" class="form-control">
</div>
<div class="form-group">
<label>Select Book:</label>
<input type="file" name="b-url" class="form-control">
</div>
<div class="form-group">
<label>Select Image:</label>
<input type="file" name="b-img" class="form-control">
</div>
<div class="form-group">
<label>Book Author:</label>
<input type="text" name="b-author" class="form-control">
</div>

<input type="submit" name="submit" value="Upload The Book" class="btn btn-primary">
</form>
</div>
</div>
</div>
</body>
</html>