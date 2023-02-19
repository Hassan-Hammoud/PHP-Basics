<?php
function isArmstrong($number) {
    $num = (string)$number;
    $length = strlen($num);
    $sum = 0;

    for ($i = 0; $i < $length; $i++) {
      $sum += pow((int)$num[$i], $length);
    }

    if ($number === $sum) {
       echo "{$number} is armstrong.";
    } else {
      echo "{$number} it is not armstrong.";
    }
  }
    isArmstrong(153) ;
?>
?>