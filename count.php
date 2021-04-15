<?php

require_once 'admin/dbconfig.php';
//$insert_new = "INSERT INTO `news` (`id`, `title`, `image_url`, `full_text`, `publish_date`) VALUES (NULL, 'msvklmkslnvf', 'nvsfmd', 'mvlskmlkvnksf', '2021-04-15 22:54:40');"
$query = mysqli_query($data_connect, "SELECT count(id) AS total FROM `news`");
$values = mysqli_fetch_assoc($query);
$num_rows =  $values['total'];
echo $num_rows;
?>