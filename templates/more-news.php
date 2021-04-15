
<link rel="stylesheet" href="../css/all.css">
<link
    rel="stylesheet"
    href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous"
/>
<?php

//require_once '../admin/news.php';
require_once '../admin/dbconfig.php';
$id = $_GET['id'];
$get_obj = mysqli_query($data_connect,"SELECT * FROM `news` WHERE `news`.`id` = $id");
$result = mysqli_fetch_array($get_obj);
echo '<title>'.$result['title'].'</title>';
?>
<body class="bg-secondary">
<div class="container">
    <div class="wrapper bg-light mt-5 d-flex" style="max-height: 500px; overflow: auto; min-height: 500px; justify-content: center">
        <div class="section" style="max-width: 700px; min-width: 700px;">
            <div class="card mt-5" style="width: 100%;">
                <div class="card-body">
                    <h4 class="card-title text-secondary"><?php echo $result['title'] ?></h4>
                    <p class="card-text"><?php echo $result['full_text'] ?></p>
                    <i class="text-muted text-right">
                        <p>Date: <?php echo $result['publish_date']?></p>
                    </i>
                    <a href="../" class="btn btn-dark">Prev</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>