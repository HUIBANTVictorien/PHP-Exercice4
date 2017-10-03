<?php
for($number = 1; $number <= 100; $number++) {
  if (($number % 5 == 0) and ($number % 3 == 0)) {
      echo "FizzBuzz ";
    }
    elseif ($number % 5 == 0) {
      echo "Buzz ";
    }
    elseif ($number % 3 == 0) {
      echo "Fizz ";
    }
    else {
      echo $number .' ';
    }
  }
   ?>
