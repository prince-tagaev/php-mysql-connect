<?php

require_once 'dbconfig.php';
if (isset($_POST['submit'])) {
    $b_name = $_POST['b-name'];
    $b_url = $_FILES['b-url']['name'];
    $b_img = $_FILES['b-img']['name'];
    $b_author = $_POST['b-author'];
//    $book_all_values = $b_name, $b_url,$b_img,$b_author;

    // $insert =$connect . "insert into books values('NULL','$name','$file')";
    if (mysqli_query($data_connect, "insert into informatic values('NULL','$b_name','$b_url','$b_img','$b_author')")) {
        move_uploaded_file($_FILES['b-url']['tmp_name'], "../informatic-books/$b_url");
        move_uploaded_file($_FILES['b-img']['tmp_name'], "../informatic-books-images/$b_img");
//        header('Location: admin-panel.php');
        echo "<script>alert('Book Has Been Uploaded to Folder');
window.location.assign('http://localhost/php-mysql-connect/admin/admin-panel.php')
</script>";

    } else {
        echo "<script>alert('Book Does Not Uploaded to Folder');
window.location.assign('http://localhost/php-mysql-connect/admin/admin-panel.php')
</script>";
    }
}
?>

<div class="books_compScience mt-3">
    <h3 class="text-primary">Update or delete books</h3>
    <div class="wrapper">
    <div class="p-2 ">
        <?php
            $select = "SELECT * FROM `informatic`";
            $result = mysqli_query($data_connect,$select);
//            $row = mysqli_fetch_array($result);


            while ($row = mysqli_fetch_array(($result))){
                $id = $row['id'];
                $AlterForDelete = "DELETE FROM `informatic` WHERE `informatic`.`id` = $id";
                $img = '../informatic-books-images/'.$row['img_url'];

                echo "<div class='card d-inline-block ml-2 mt-2' style='width: 48%; min-height: 400px !important; vertical-align: top'>
                    <img src='$img' class='card-img-top'>
                    <div class='card-body'>
                    <h6 class='card-title'>".$row['book_name']."</h6>
                    <i>
                    <p class='card-subtitle text-muted mb-2' style='font-size: 10px'>Author: ".$row['book_author']."</p>
                    </i>
                    <a href='templates/delete-book.php?id=". $row['id'] ."' class='btn btn-danger'>Delete</a>
                    <a href='#' class='btn btn-success'>Update</a>
</div>
    </div>";
            }
            ?>


    </div>
    </div>
</div>

