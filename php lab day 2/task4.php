<?php
$arr = array(12,45,10,25);
print_r($arr);
echo("<Br>");
echo("<Br>");
echo("the sum = " . array_sum($arr));
echo("<Br>");
echo("<Br>");
echo("the avg = " . array_sum($arr)/count($arr));
echo("<Br>");
echo("<Br>");
rsort($arr);
foreach ($arr as $key => $val) {
    echo "array[" . $key . "] = " . $val . "<br>";
}
?>