<h1 class="text-center" style="color:blue">
    lab5
</h1>
<?php
   $nameErr = $passwordErr = "";
   $errors=[];
   $username = $password = "";
   session_start();
include "header.php";
if( isset($_SESSION['user'])){
    header('location: index.php');    
}
  if(isset($_POST['signup'])){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if (empty($_POST["username"])) {
            $nameErr = "Name is required";
            $errors[] = $nameErr;
          } else {
        $username = $_POST["username"];}
        if (empty($_POST["password"])) {
            $passwordErr = "password is required";
            $errors[] = $passworderr;
          } else {
        $password = $_POST["password"];}
          }
          
          $dbhost = 'localhost';
          $dbuser = 'root';
          $dbpass = '';
          $dbname ='lab5';
          $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
          
          if(! $conn ) {
             die('Could not connect: ' . mysqli_error($conn));
          }
        
          
         
          mysqli_select_db( $conn,$dbname );
       
          $sql = "INSERT INTO users(username,password) 
          VALUES ( '$username', '$password' )";
          var_dump($errors);
       if(empty($errors)){
          $retval = mysqli_query( $conn,$sql );
    // $_SESSION['user'] = $username;
          header("Location:login.php" );
          if(! $retval ) {
             die('Could not insert to table: ' . mysqli_error($conn));
          }}
        }
?>
<h1 class="text-center">sign up</h1>
<div class="container">
    <form class="signup" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
        <input class="form-control" type="text" name="username" placeholder="username" autocomplete="off">
        <input class="form-control" type="password" name="password" placeholder="password" autocomplete="new-password">


        <div class="d-grid gap-2">

            <input class="btn btn-success " type="submit" name='signup' value="signup">
        </div>
        <h8>already have an account ? <h8><a href="login.php">login</a>

    </form>
</div>