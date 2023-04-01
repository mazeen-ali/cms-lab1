<?php
$arr = array("Sara"=>31,"John"=>41,"Walaa"=>39,"Ramy"=>40);
echo("ascending order sort by value");
echo "<br>";


function my_sort3($a, $b) {
    if ($a == $b) return 0;
    return ($a < $b) ? -1 : 1;
  }
uasort($arr,"my_sort3");
foreach($arr as $key => $value) {
  echo "[" . $key . "] => " . $value;
  echo "<br>";

}
echo("ascending order sort by key");
echo "<br>";



function my_sort4($a, $b) {
    if ($a == $b) return 0;
    return ($a < $b) ? -1 : 1;
  }
uksort($arr,"my_sort4");

foreach($arr as $key => $value) {
  echo "[" . $key . "] => " . $value;
  echo "<br>";
  
}
?>
<?php
echo("descending order sort by value");
echo "<br>";


function my_sort($a, $b) {
    if ($a == $b) return 0;
    return ($a < $b) ? 1 : -1;
  }
uasort($arr,"my_sort");
foreach($arr as $key => $value) {
  echo "[" . $key . "] => " . $value;
  echo "<br>";
}
echo("descending order sort by key");
echo "<br>";



function my_sort2($a, $b) {
    if ($a == $b) return 0;
    return ($a < $b) ? 1 : -1;
  }
uksort($arr,"my_sort2");

foreach($arr as $key => $value) {
  echo "[" . $key . "] => " . $value;
  echo "<br>";

  
};


?>