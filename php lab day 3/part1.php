<h1 class="text-center" style="color:purple">
            lab3
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
               

                  $group=  $_POST["group"];

                  
                  if (empty($_POST["gender"])) {
                    $genderErr = "Gender is required";
                    $errors[] = $genderErr;

                  } else {
                    $gender = $_POST["gender"];
                  }
                 

                  $class=  $_POST["class"];
            
                  if (empty($_POST["agree"])) {
                    $agreeErr = "agree is required";
                    $errors[] = $agreeErr;

                  } else {
              $agree = "you have agreed";
                  }
                
            }
        }
        ?>
<fieldset>
    <legend>part 1</legend>
    <h2 class="text-center" style="color:red">
            * required field
        </h2>
        <form class="login" method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
        <label>name: </label>
            <input  type="text" name="name"  autocomplete="off"> <span style="color:red">* <?php echo  $nameErr;?></span>
            <br>
            <br>
        <label>email: </label>

            <input  type="email" name="email"  ><span style="color:red">* <?php echo $emailErr;?></span>
            <br>
            <br>

            <label>group #: </label>

            <input  type="text" name="group">
            <br>
            <br>

           <div class="class" style="disply:inline">
           <label>class details :  </label>

<textarea name="class"  cols="40" rows="8"></textarea>

           </div>
           <br>
           <br>
    
           gender :   
      <label >male</label>     <input  type="radio" name="gender" value="male" >
      <label >female</label>     <input  type="radio" name="gender" value="female" > <span style="color:red">* <?php echo $genderErr;?></span>
      <br>
      <br>
      <label >select courses:</label>
  <select name="courses[]"  multiple>
    <option  value="html">html</option>
    <option  value="javascript">javascript</option>
    <option  value="php">php</option>
    <option  value="mysql">mysql</option>
  </select>
                  <br>
                  <br>

      <label for="agree">agree:</label>
      <input type="checkbox" name="agree" value="agree"><span style="color:red"> * <?php echo $agreeErr;?></span>
      <br>
      <br>

                <input class="btn btn-primary " type="submit" name='submit' value="submit">
                </fieldset>
        </form>
      
        <?php
       if (isset($_POST['submit'])){
        if (empty($errors)){
        echo "your name is :  " .$name;
        echo "<br>";
        echo "your email is :  ".$email;
        echo "<br>";
        echo "your group is :  ".$group;
        echo "<br>";
        echo "your class details is :  ".$class;
        echo "<br>";
        echo "your gender is :  ".$gender;
        echo "<br>";
    
        if(isset($_POST['submit'])){
          if(!empty($_POST['courses'])) {
            echo "your courses is : ";
            foreach($_POST['courses'] as $selected){
          echo      ' ' . $selected ;
                
            }          
          } else {
            echo 'Please select the courses.';
          }
        }
           echo "<br>";
        echo $agree;
    }}
?>