<?php
// Example one
$arr1 = array(1);
echo "\nbefore:<br>";
echo "\$arr1[0] == {$arr1[0]}\n<br>";
$arr2 = $arr1;
$arr2[0]++;
echo "\nafter:<br>";
echo "\$arr1[0] == {$arr1[0]}<br>";
echo "\$arr2[0] == {$arr2[0]}<br>";


$arr = array(1);
//$a =& $arr[0]; //$a and $arr[0] are in the same reference set
$arr2 = $arr; //not an assignment-by-reference!
$arr2[0]++;
//echo "a=$a<br>";
echo "arr[0] = $arr[0]<br>";

$arr = array(1);
$a =& $arr[0]; //$a and $arr[0] are in the same reference set
$arr2 = $arr; //not an assignment-by-reference!
$arr2[0]++;
//echo "a=$a<br>";
echo "arr[0] = $arr[0]<br>";
?>

