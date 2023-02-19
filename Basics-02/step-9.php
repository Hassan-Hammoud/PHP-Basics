<?php

$n = readline("Enter your Number: ");

function is_Power_of_two($n)
{
echo ($n & ($n-1)) == 0 ? "{$n} is Power of 2" : "{$n} is not power of 2";

}

is_Power_of_two($n);
?>