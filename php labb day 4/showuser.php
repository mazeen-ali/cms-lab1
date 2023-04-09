<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="e.css">
    <title>Document</title>
</head>

<body>
    <div class="header">
        <h1>user detailes</h1>


        <a href="adduser.php" target="blank"> <button class=" btn btn-success">add new user</button></a>



    </div>
    <hr>
</body>

</html>
<?php

   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $dbname ='lab4';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error($conn));
   }
   
//    echo 'Connected successfully<br>';
  
   $sql = 'SELECT id,name, email, gender,mail FROM users';
   mysqli_select_db($conn,$dbname);
   $result = mysqli_query($conn,$sql );
   
   if(! $result ) {
      die('Could not get data: ' . mysqli_error($conn));
   }


   if (mysqli_num_rows($result) > 0) {
      // output data of each row

       echo "<table class='centre'>";
       echo "<tr>";
       echo "<th>#</th>";
       echo "<th>name</th>";
       echo "<th>email</th>";
       echo "<th>gender</th>";
       echo "<th>mail statues</th>";
       echo "<th>action</th>";
       echo "</tr>";
         while($row = mysqli_fetch_assoc($result)) {
                   echo "<tr>";
         echo "<td> {$row['id']}  </td> ".   
         "<td> {$row['name']}  </td> ".
         "<td>  {$row['email']}  </td> ".
         "<td>  {$row['gender']} </td>  ".
         "<td>  {$row['mail']} </td>".
         "<td> 
          <a href='showrecord.php?id={$row['id']}' target='blank'>   <i class='fa fa-eye'></i> </a>
          <a href='editrecord.php?id={$row['id'] }' target='blank'>   <i class='fa fa-edit'></i> </a>
          <a href='deleterecord.php?id={$row['id']}' target='blank'>   <i class='fa fa-trash'></i> </a>
         
         </td> ";
         echo "</tr>";
      }
       echo "</table>";

    } else {
      echo "0 results";
    }
    /* //Its a good practice to release cursor memory
    mysqli_free_result($result);
    */
//    echo "Fetched data successfully\n";
   
   mysqli_close($conn);
?>