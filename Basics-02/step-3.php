<?php
$var1 = 32;
$var2 = 45;
echo $var1 . ' ' . $var2 
    ."<br>";
    $num = $var1;
    $var1 = $var2;
    $var2 = $num;

echo $var1 . ' ' . $var2;
?>