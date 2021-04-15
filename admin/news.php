<link rel="stylesheet" href="../css/all.css">
<link
        rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous"
/>
<?php

require_once 'dbconfig.php';
//$insert_new = "INSERT INTO `news` (`id`, `title`, `image_url`, `full_text`, `publish_date`) VALUES (NULL, 'msvklmkslnvf', 'nvsfmd', 'mvlskmlkvnksf', '2021-04-15 22:54:40');"
$query = mysqli_query($data_connect, "SELECT * FROM `news`");

?>


