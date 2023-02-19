<?php

$input = readline("Enter your number: ");

function PowerOfTwo( $input ) {
        if ($input > 0 && $input %2) {
            echo   "$input is not a power of 2 ";
        }
        else echo  "$input is a power of 2 ";
    }

echo PowerOfTwo($input);
?>