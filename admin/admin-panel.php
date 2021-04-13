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
                <li><a href="adabiyat.php">Адабият</a></li>
            </ul>
            </div>
        
            <div class="col-7">
                <div class="m-5">
                    <div class="blog">
                        
                    blog admin panel
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>