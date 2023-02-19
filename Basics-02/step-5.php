<?php
$word = readline("Enter your number written in letters: ");
function readDigit ($word){
    switch ($word) {
        case "One":
            echo 1;
            break;
        case "Two":
            echo 2;
            break;
        case "Three":
            echo 3;
            break;
        case "Four":
            echo 4;
            break;
        case "Five":
            echo 5;
            break;
        case "Six":
            echo 6;
            break;
        case "Seven":
            echo 7;
            break;
        case "Eight":
            echo 8;
            break;
        case "Nine": 
            echo 9;
            break;
        case "Ten": 
            echo 10;
            break;

            default:
            break;
    }
}

readDigit($word);
?>