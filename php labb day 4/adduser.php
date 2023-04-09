<h1 class="text-center" style="color:purple">
    lab4
</h1>
<?php
        $nameErr = $emailErr = $genderErr = $agreeErr = "";
        $errors=[];
        

        $name = $email = $gender = $group =$class = $courses= $agree= "";

?>
<?php
        if(isset($_POST['submit'])){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                if (empty($_POST["name"])) {
                    $nameErr = "Name is required";
                    $errors[] = $nameErr;
                  } else {
                $name = $_POST["name"];
                  }
                 
                  if (empty($_POST["email"])) {
                    $emailErr = "email is required ";
                    $errors[] = $emailErr;

                  } else {
                $email=  $_POST["email"];
                  }
               
                  
                  if (empty($_POST["gender"])) {
                    $genderErr = "Gender is required";
                    $errors[] = $genderErr;

                  } else {
                    $gender = $_POST["gender"];
                  }
                 

             
            
                  if (empty($_POST["agree"])) {
                   $agree = 'no';

                  } else {
              $agree = "yes";
                  }
                
            }

   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $dbname ='lab4';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error($conn));
   }
   
//    echo 'Connected successfully<br>';
   
  
   mysqli_select_db( $conn,$dbname );

   $sql = "INSERT INTO users(name,email, gender, mail) 
   VALUES ( '$name', '$email',' $gender', '$agree' )";
if(empty($errors)){
   $retval = mysqli_query( $conn,$sql );
   $back = "showuser.php";
   header('Location:'.$back );
   if(! $retval ) {
      die('Could not insert to table: ' . mysqli_error($conn));
   }}
  }
//    echo "<br>Data inserted to table successfully\n";
//    mysqli_close($conn);
?>
<fieldset>
    <legend>user registeration form</legend>
    <h2 class="text-center" style="color:red">
        please fill this form to add user to the database
    </h2>
    <form class="login" method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
        <label>name: </label>
        <input type="text" name="name" autocomplete="off"> <span style="color:red">* <?php echo  $nameErr;?></span>
        <br>
        <br>
        <label>email: </label>

        <input type="email" name="email"><span style="color:red">* <?php echo $emailErr;?></span>
        <br>
        <br>






        gender :
        <label>male</label> <input type="radio" name="gender" value="male">
        <label>female</label> <input type="radio" name="gender" value="female"> <span style="color:red">*
            <?php echo $genderErr;?></span>
        <br>


        <label for="agree">recive email from us:</label>
        <input type="checkbox" name="agree" value="agree"><span style="color:red"> * <?php echo $agreeErr;?></span>
        <br>
        <br>

        <input class="btn btn-primary " type="submit" name='submit' value="submit">
</fieldset>
</form>