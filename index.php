<?php
include_once "login.php"
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/myStyle.css">
      <link rel="stylesheet" href="just.css">
    <link rel="icon" href="img/asaba-logo.png"> 
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
  <body class="bg-secondary p-3">
<div class="container wrapper p-3 bg-white">
  <div id="banner" class="text-center">
    <!-- <h1 class="text-light p-3">ASABA ~ libRARY</h1> -->
  </div>
<div id="header">
  <?php include "navbar.php" ?>
  </div>
    
<div id="scroll-none">
<main style="min-height: 440px;">
    <div class="container">
     <div class="row p-2 justify-content-center">
       <div class="col-7 p-2 mr-2">
         <div class="news border p-1" style="width: 18rem;">
             <img class="card-img-top" src="img/asaba-logo.png" alt="">
             <div class="card-body">
                 <h4 class="card-title text-primary"><?php echo $title ?></h4>
                 <p class="card-text"><?php echo substr($description, 0,50) ?></p>

                     <a href="#" class="btn btn-success">More...</a>
                 <br>
                 <i class="text-secondary">Publish date: <?php echo $publish_date ?></i>
             </div>
         </div><div class="news-2" id="news-2">
               <ul class="p-3">
                   <li class="mt-2"><a class="btn btn-primary w-50" href="#" id="informatica-aside">Computer science</a></li>
                   <li class="mt-2"><a class="btn btn-primary w-50" href="#" id="literature">Literature</a></li>
               </ul>
               </div>
       </div>
       <div class="col-3 bg-secondary p-2 text-white ml-5 min-height">
         <ul class="p-3">
           <li class="mt-2"><a href="tel:+996995211101" class="text-warning" >phone: 0995-21-11-01</a></li>
           <li class="mt-2"><a href="mail:asaba@internet.ru" class="text-warning" >email: asaba@internet.ru</a></li>
           <li class="mt-2"><a href="https://instagram.com/asaba.kg" class="text-warning" >instagram: @asaba.kg</a></li>
         </ul>
       </div>
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

</div>
<!-- begin books page -->

<div class="books justify-content-center" id="books-index">
        
 <div class="container">
 <div class="get-file-mysql mt-3 bg-light text-dark p-3" style="max-height:400px; min-height:400px;">
        
        <h3 class="text-center bg-secondary text-light p-2">Books  <span class="close text-light">x</span></h3>
       <div class="row d-flex">
         <div class="col-8 d-grid">
         <?php
        echo "<div class='books-name'>
        <h3 class='p-2 bg-primary text-white mr-3'>Books name</h3>
        </div>";
        
        ?>
        
        <?php
        
        $connect = include('admin/dbconfig.php');
        $data_connect = mysqli_connect($host,$username,$password,$data_base);
        $query = "SELECT * FROM `informatic`";
        $result = mysqli_query($data_connect,$query);
        
        while ($row = mysqli_fetch_array($result)){
          $img_url = "informatic-books-images/".$row['img_url'];
          
          $files_dir = "informatic-books/".$row['book_url'];
          echo "<img src='" . $img_url . "' alt='".$row['book_name']."' width='32x32' class='mr-2'>" . "<a download href='$files_dir' class='text-dark'>" . $row['book_name'] ."</a>" . "<br>" . "<hr>";
          
          
          // echo $row['name'] . filesize($files_dir);
          // echo "<a href='files-data/$row['bookName']'>$row['name']</a>" . "<br>";
          // echo "<a download href='$row['bookName']' class='text-white'>$file_name</a>" . "<br>";
        }
        ?>
         </div>

         <div class="col-4 d-grid">
         <?php
        echo "<div class='books-size'>
        <h3 class='bg-success p-2 text-white'>Books size</h3>
        </div>";
        
        ?>
        
        <?php
        $connect = include('admin/dbconfig.php');
        $data_connect = mysqli_connect($host,$username,$password,$data_base);
        $query = "SELECT * FROM `informatic`";
        $result = mysqli_query($data_connect,$query);
        while ($row = mysqli_fetch_array($result)){
          
          $files_dir = "informatic-books/".$row['book_url'];
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
          echo "<i class='text-dark'>" . $file_size . "</i>" . "<br>" . "<hr>";
          
          
          // echo $row['name'] . filesize($files_dir);
          // echo "<a href='files-data/$row['bookName']'>$row['name']</a>" . "<br>";
          // echo "<a download href='$row['bookName']' class='text-white'>$file_name</a>" . "<br>";
        }
        ?>
         </div>
       </div>
       
        </div>
 </div>
        </div>
        </div>
        <!-- end books page -->
    <script src="js/javascript.js"></script>
<script src="just.js"></script>
  </body>
</html>
