<?php
define("website_name" , "php labs");
echo "website name is : " . website_name;
ECHO "<br>";
echo "server name is : " . $_SERVER['SERVER_NAME'];
ECHO "<br>";



echo "server addres is : " . $_SERVER['SERVER_ADDR'];

ECHO "<br>";

echo "server port is : " .  $_SERVER['SERVER_PORT'];
ECHO "<br>";
echo "filepath is : " . __FILE__;
ECHO "<br>";

echo "file name is : " .  basename(__FILE__);
ECHO "<br>";
$age = 10;
$grade = $age - 6;
switch($age){
case $age<5:
    echo "stay at home";
    break;
    case 5:
        echo "go to kindergarden";
        break;
        case $age > 5 && $age<12:
            echo "Go to grade :" . $grade;
            break;

}
phpinfo();












?>