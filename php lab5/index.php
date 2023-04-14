<?php
include "navbar.php";
include "header.php";
session_start();
if( isset($_SESSION['user'])){ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="alert alert-primary">welcome <?php echo $_SESSION['user']; ?></div>
        <button class="btn btn-primary"><a href="logout.php" style="color:white">logout</a></button>
    </div>
</body>

</html>
<?php }
else{
    header("location:login.php");
}