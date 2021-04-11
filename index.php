<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/all.css">
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4./js/bootstrap.min.js"></script>
    
  </head>
  <body>

  <?php include "navbar.php" ?>
    
<div id="wrapper">
<div></div>
<main style="min-height: 620px;">
    <div class="container">
      <?php
      echo "Hello";
      ?>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore iure fugit ratione asperiores voluptates soluta perferendis atque nam cumque harum molestias odit odio in, inventore, facilis autem sequi! Sit temporibus autem suscipit. Soluta tempora quam aspernatur neque, quidem esse fuga quasi incidunt optio assumenda eius perspiciatis obcaecati cum velit doloribus culpa eaque ipsa corrupti, nobis enim harum amet. Voluptatum repellat temporibus magni ipsum enim. Est assumenda dolor ullam, magnam ut debitis architecto accusamus fugit quibusdam, quisquam consectetur unde sit saepe illo repudiandae eligendi. Ducimus illum voluptate culpa amet necessitatibus fuga itaque modi sequi quas deleniti, nobis doloremque. Officiis, sapiente. Ratione. Zuhridin

        <div class="get_file bg-secondary p-3">

        <?php
        $dir_path = 'img/';
        
        if(is_dir($dir_path)){
          $files = opendir($dir_path);
          {
            if ($files) {
              while (($file_name = readdir($files)) !== FALSE) {
                if ($file_name != "." && $file_name != "..") {
                  // echo $file_name;
                  echo "<a download href='$dir_path$file_name' class='text-white'>$file_name</a>" . "<br>";
                }
              }
            }
          }
        }

        
        ?>
        </div>

        <div class="get-file-mysql mt-3 bg-secondary p-3">
        <?php
        
        $data_connect = mysqli_connect("192.168.43.61","prince.tagaev","Prince211101","library");
        $query = "SELECT * FROM `books`";
        $result = mysqli_query($data_connect,$query);
        while ($row = mysqli_fetch_array($result)){
          
          $files_dir = "files-data/".$row['bookName'];
          $count_size = 0;
          $file_size =  $count_size + filesize($files_dir);
          if($file_size >= 1073741824)
          {
            $file_size = number_format($file_size / 1073741824) . ' GB';
          }
          elseif($file_size >= 1048576)
          {
            $file_size = number_format($file_size / 1048576) . ' MB';
          }
          elseif($file_size >= 1024)
          {
            $file_size = number_format($file_size / 1024) . ' KB';
          }
          elseif($file_size > 1)
          {
            $file_size = $file_size . " bytes";
          }
          elseif($file_size == 1)
          {
            $file_size = $file_size . ' byte';
          }
          else
          {
            $file_size = '0 bytes';
          }
          echo "<a download href='files-data/" . $row['bookName'] . "' class='text-white'>" . $row['name'] ."</a>"  . "<i class='text-white'>" ." - " . $file_size . "</i>" . "<br>";
          
          
          // echo $row['name'] . filesize($files_dir);
          // echo "<a href='files-data/$row['bookName']'>$row['name']</a>" . "<br>";
          // echo "<a download href='$row['bookName']' class='text-white'>$file_name</a>" . "<br>";
        }
        ?>
        <!-- <a href="<?php $row['bookName']?>"><?php $row['name'] ?></a> -->
        </div>
    </div>



</main>
</div>
<footer class="w-100 bg-dark  text-light text-center" style="line-height:4">
<div class="inner_footer container">
<!-- <input type="date"> -->
<?php
days();
?>
</div>
</footer>
    <script>
        // var search_btn = document.getElementById('btn-search')
        // search_btn.onclick = function (){
           
        // }
        $(document).ready(function(){
          $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#wrapper *").filter(function() {
              $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
          });
        });
        
        </script>
        


        <?php
    


    function days(){
      date_default_timezone_set("Asia/Bishkek");
      $date_d = date("d.m.y");
      $time_d = Date("H:i:sa");
      echo ("Today " . $date_d . " Time you open this site " . $time_d." "); 


      switch ($date_d){
        case 'Mon':
          echo ('Monday');
          break;
        case 'Tue':
          echo ('Tuesday');
          break;
        case 'Wed':
          echo ('Wednesday');
          break;
        case 'Thu':
          echo ('Thursday');
          break;
        case 'Fri':
          echo ('Friday');
          break;
        case 'Sat':
          echo ('Saturday');
          break;
        case 'San':
          echo ('Sanday');
          break;
      }
    }
    


    ?>
  </body>
</html>
