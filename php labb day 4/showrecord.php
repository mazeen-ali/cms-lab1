<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Document</title>
</head>

<body>

</body>

</html>
<h1>view record</h1>
<hr>
<?php

   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $dbname ='lab4';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error($conn));
   }
   $idd = isset($_GET['id']) && is_numeric($_GET['id']) ? $_GET['id'] : 0;

    $sql2 = "SELECT id,name,email,gender,mail FROM users WHERE id = $idd ";
    mysqli_select_db($conn,$dbname);
    $result2 = mysqli_query($conn,$sql2 );
    
    if(! $result2 ) {
       die('Could not get data: ' . mysqli_error($conn));
    }
    if (mysqli_num_rows($result2) > 0) {
       $row2 = mysqli_fetch_assoc($result2);
       echo"<h3>name</h2> <br>" .$row2['name'];
       echo"<h3>email</h2> <br>" .$row2['email'];
       echo"<h3>gender</h2> <br>" .$row2['gender'];
       if($row2['mail'] ==="yes"){
         echo "<h5>you will recive e-mails from us</h5>";
       };
       echo"<br>";
       echo "<a href='showuser.php'><button class= 'btn btn-primary'>back</button></a>";
     } else {
       echo "0 results";
     }
   mysqli_close($conn);
?>