<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome <?php $_SESSION['username']?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <?php require'partials/_nav.php'?>
    
    <div class="container my-4">
        <div class="card text-bg-primary mb-3" style="max-width: 18rem;">
        <div class="card-header">Welcome-<?php echo $_SESSION['username']?></div>
        <div class="card-body">
            <p class="card-text">hey how are you doing? Welcome to ASIF you are login ia as <?php echo $_SESSION['username']?>.Some quick example text to build on the card title anmake up the bulk of the card's content.</p>
        </div>
    </div>
    <div class="container my-4 ">
        <form action="/LOGIN_SYSTEM/logout.php">
        <button type="logout" class="btn btn-primary">LOGOUT</button>   
        </form> 
    </div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>