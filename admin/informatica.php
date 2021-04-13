
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../css/all.css">
    
    <link rel="icon" href="../img/asaba-logo.png"> 
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <title>Admin Panel</title>
</head>
<body>
    <div class="container bg-light wrapper">
         <div class="navbar-light text-white bg-secondary menu">
            <div class="row d-flex">
                <div class="col-8 f-left">
                <h3 class="bg-primary w-25 p-2"><a class="text-light" href="admin-panel.php">Admin Panel</a></h3>
                </div>
                 <div class="col-3 ml-5 float-right text-right">
                 <img src="../img/asaba-logo.png" width="64x64">
                 <button class="btn btn-outline-warning ml-3"><a class="text-warning" href="includes/logout.php">log out</a></button>
                
                
                    <!-- <h4 class="ml-3 mt-1">ASABA-library</h4> -->
                 </div>
            </div>
        </div>
        <div class="row">
           
            <div class="col-2 aside bg-secondary">
            <ul>
                <li><a href="informatica.php">Информатика</a></li>
                <li><a href="#">Манас</a></li>
                <li><a href="#">Драмма</a></li>
                <li><a href="#">Музыка</a></li>
                <li><a href="adabiyata.php">Адабият</a></li>
            </ul>
            </div>
        
            <div class="col-7">
                <div class="m-5">
                    <div class="informatica">
                        
                    <?php
$connect = include('dbconfig.php');
$data_connect = mysqli_connect($host,$username,$password,$data_base);
if(isset($_POST['submit'])){
    $b_name = $_POST['b-name'];
    $b_url = $_FILES['b-url']['name'];
    $b_img = $_FILES['b-img']['name'];
    $b_author = $_POST['b-author'];

    // $insert =$connect . "insert into books values('NULL','$name','$file')";
    if(mysqli_query($data_connect, "insert into informatic values('NULL','$b_name','$b_url','$b_img','$b_author')")){
        move_uploaded_file($_FILES['b-url']['tmp_name'], "../informatic-books/$b_url");
        move_uploaded_file($_FILES['b-img']['tmp_name'], "../informatic-books-images/$b_img");
        echo "<script>alert('Book Has Been Uploaded to Folder')</script>";

    }
    else{
        echo "<script>alert('Book Does Not Uploaded to Folder')</script>";
    }
}
?>
<!-- <body class="p-3"> -->
<h3 class="text-primary">Добавить книги по Информатике</h3>
<div class="container bg-white p-3">

<div class="wrapper">
<div class="container">
<form action="index.php" method="post" enctype="multipart/form-data">
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

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>