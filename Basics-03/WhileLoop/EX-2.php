<?php
$input = readline("Enter your number : ");
$num=1;
$output=1;
while ($num <= $input){
$output  = $num * $output;
$num ++;
}
echo $output;
?>