<h1>application name : php class registration</h1>
<?php


$students = [
    ['name' => 'Alaa', 'email' => 'ahmed@test.com', 'status' => 'CMS'],
    ['name' => 'Shamy', 'email' => 'ali@test.com', 'status' => 'OS'],
    ['name' => 'Youssef', 'email' => 'basem@test.com', 'status' => 'OS'],
    ['name' => 'Waleid', 'email' => 'farouk@test.com', 'status' => 'CMS'],
    ['name' => 'Rahma', 'email' => 'hany@test.com', 'status' => 'OS'],
];
?>
<table>
    <tr>
        <th>email</th>
        <th>name</th>
        <th>status</th>
    </tr>
    <?php
    foreach($students as $student){

        if( $student['status'] == "CMS"){

    ?>
    <tr style="color:red" >
        <td><?php echo $student['name']?></td>
        <td><?php echo $student['email']?></td>
        <td ><?php echo $student['status']?></td>
    </tr>
    <?php
 }
 else{
    ?>
       <tr>
        <td><?php echo $student['name']?></td>
        <td><?php echo $student['email']?></td>
        <td ><?php echo $student['status']?></td>
    </tr>
    <?php
 }
     }
    ?>
</table>