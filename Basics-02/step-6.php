<?php
$num = readline(" Enter your number: ");
echo $num[0];
$res = 0;
for ($i=0; $i <strlen($num) ; $i++) { 
    $res = intval($num[$i]) + $res;

}
echo $res;
?>