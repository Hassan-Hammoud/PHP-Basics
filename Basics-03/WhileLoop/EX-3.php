<?php

$text = readline("Enter Your Text: ");

$word = readline("Enter Your Word: ");

echo count_word($text, $word);
function count_word($text, $word) {
    $words = explode(" ", $text);
    
    $count = 0;
    
    $i = 0;
    while ($i < count($words)) {
        if ($words[$i] == $word) {
            $count++;
        }
        $i++;
    }
    
    return $count;
}

?>