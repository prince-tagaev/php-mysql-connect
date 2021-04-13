

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-reg.css">
    <link rel="stylesheet" href="../css/all.css">
    
    <link rel="icon" href="../img/asaba-logo.png"> 
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <title>log in</title>
</head>
<body class="bg-light">
   <div class="container">
   <form action="includes/login.php" method="post" class="justify-content-center d-flex">
        <div class="form w-50">
            <h3>log in</h3>
           <div class="inner-form w-75 bg-dark p-3 text-white">
           <label>Username:</label>
            <input type="text" name="login" class="form-control">
            <br>
            <label>Password: </label>
            <input type="password" name="password" class="form-control">
            <br>
            <input type="submit" class="btn btn-primary" value="login">
           </div>
        </div>
    </form>
   </div>
</body>
</html>