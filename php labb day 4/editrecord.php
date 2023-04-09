<h1 class="text-center" style="color:purple">
    lab4
</h1>
<?php
        $nameErr = $emailErr = $genderErr = $agreeErr = "";
        $errors=[];
        

        $name = $email = $gender =  $agree= "";
        
   if(isset($_POST['edit'])){
   
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
        $email= $_POST["email"];
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

        $idd = $_POST["userid"];
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = '';
        $dbname ='lab4';
        $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
        
        if(! $conn ) {
           die('Could not connect: ' . mysqli_error($conn));
        }
        
        
       
        mysqli_select_db( $conn,$dbname );
       
$sql = ("UPDATE users SET name = '$name' ,email ='$email', gender = '$gender', mail = '$agree' WHERE id= '$idd' ");
if(empty($errors)){
    $retval = mysqli_query( $conn,$sql );
    $back = "showuser.php";
    header('Location:'.$back );
    if(! $retval ) {
       die('Could not insert to table: ' . mysqli_error($conn));
    }}
mysqli_close($conn);
}
}





?>
<fieldset>
    <legend>user edit form</legend>
    <h2 class=" text-center" style="color:red">
        please fill this form to edit user in the database
    </h2>
    <form class="edit" method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
        <input type="hidden" name="userid" value="<?php echo $_GET['id']?>">

        <label>name: </label>
        <input type="text" name="name" autocomplete=" off"> <span style="color:red">*
            <?php echo  $nameErr;?></span>
        <br>
        <br>
        <label>email: </label>

        <input type="email" name="email"><span style="color:red">*
            <?php echo $emailErr;?></span>
        <br>
        <br>

        gender :
        <label>male</label>
        <input type="checkbox" name="gender" value="male">
        <label>female</label>
        <input type="checkbox" name="gender" value="female">

        <span style="color:red">*
            <?php echo $genderErr;?></span>
        <br>

        <label for="agree">recive email from us:</label>
        <input type="checkbox" name="agree" value="agree"><span style="color:red"> * <?php echo $agreeErr;?></span>
        <br>
        <br>

        <input class="btn btn-primary " type="submit" name=' edit' value="edit">

</fieldset>
</form>