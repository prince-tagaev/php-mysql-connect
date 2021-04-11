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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
  </head>
  <body>

  <?php include "navbar.php" ?>
    
<div id="wrapper">
<div></div>
<main style="min-height: 540px;">
    <div class="container">
      <?php
      echo "Hello";
      ?>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore iure fugit ratione asperiores voluptates soluta perferendis atque nam cumque harum molestias odit odio in, inventore, facilis autem sequi! Sit temporibus autem suscipit. Soluta tempora quam aspernatur neque, quidem esse fuga quasi incidunt optio assumenda eius perspiciatis obcaecati cum velit doloribus culpa eaque ipsa corrupti, nobis enim harum amet. Voluptatum repellat temporibus magni ipsum enim. Est assumenda dolor ullam, magnam ut debitis architecto accusamus fugit quibusdam, quisquam consectetur unde sit saepe illo repudiandae eligendi. Ducimus illum voluptate culpa amet necessitatibus fuga itaque modi sequi quas deleniti, nobis doloremque. Officiis, sapiente. Ratione. Zuhridin
    <?php
    $name =  $_POST['name'];
    $surname =  $_POST['surname'];
    $age =  $_POST['age'];
    echo "Men " . $surname . " " . $name . " Jashym " . $age . " da"
    ?>
    <div class="row">
    <div class="col">
    <form action="index.php" method="post">
    <label for="name">
    <p>Name:</p>
    <input type="text" name="name">
    </label>
    <label for="surname">
    <p>Surname:</p>
    <input type="text" name="surname">
    </label>
    <label for="age">
    <p>Age:</p>
    <input type="text" name="age">
    </label>
    <button type="submit">Send</button>
    </form>
    </div>
    </div>
    </div>



</main>
</div>
<footer class="w-100 bg-dark p-2 text-light text-center">
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
