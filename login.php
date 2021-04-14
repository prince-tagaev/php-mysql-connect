<?php
$connect = include "admin/dbconfig.php";
$data_connect = mysqli_connect($host, $username, $password, $data_base);
$get_data = "SELECT * FROM news";
$result = mysqli_query($data_connect,$get_data);

while ($base = mysqli_fetch_array($result)){
    global $title;
    global $description;
    global $publish_date;
    $title = $base["title"];
    $description = $base["description"];
    $publish_date = $base["publish_date"];
}

