<?php
for ($x = 1; $x <= 100 ; $x++) {
if($x % 15 == 0){
    echo 'FizzBuzz';
    }elseif($x % 3 == 0){
    echo 'Fizz';
    }elseif($x % 5 == 0){
    echo 'Buzz';
    }else{
        echo $x;
    }
    echo PHP_EOL;
}
?>