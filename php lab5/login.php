<h1 class="text-center" style="color:blue">
    lab5
</h1>
<div class="login-page">
    <div class="container">

        <h1 class="text-center">
            <span class='selected' data-class="login">Login</span>|<span><a href="signup.php">sign up</a></span>
        </h1>

        <form class="login" method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
            <input class="form-control" type="text" name="user" placeholder="username" autocomplete="off">
            <input class="form-control" type="password" name="pass" placeholder="password" autocomplete="new-password">
            <div class="d-grid gap-2">

                <input class="btn btn-primary " type="submit" name='login' value="login">
            </div>
        </form>


    </div>

</div>
<?php
$user = $password = "";
include "header.php";
session_start();

if( isset($_SESSION['user'])){
    header('location: index.php');    
}
        if(isset($_POST['login'])){
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $username = $_POST["user"];
    $password = $_POST["pass"];

    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $dbname ='lab5';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
    
    if(! $conn ) {
       die('Could not connect: ' . mysqli_error($conn));
    }
    
   
    mysqli_select_db( $conn,$dbname );
    $sql = "SELECT  id,username ,password   FROM users WHERE   username = '$username'  AND  password ='$password' ";
   $retval = mysqli_query( $conn,$sql );
   if (mysqli_num_rows($retval) > 0) {
    $row = mysqli_fetch_assoc($retval);
    $_SESSION['user'] = $username;

    header('location: index.php');
    exit();
   }
   else{
    echo "<div class='text-center container alert alert-danger'>username or password is incorrect</div>";
   }
   
    if(! $retval ) {
        die('Could not insert to table: ' . mysqli_error($conn));
     }
}}         ?>