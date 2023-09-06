<?php

function my_fizz_buzz(int $length) : array{

$result = [];

    for($i = 1; $i <= $length; $i++){
        if($i%3 ===0 && $i%5===0){
            array_push($result, "FizzBuzz");
        }elseif($i%3 === 0){
            array_push($result, "Fizz");
        }elseif($i%5 === 0){
            array_push($result, "Buzz");
        }else{
            array_push($result, $i);
        }
    }
    return $result;
}

var_dump( my_fizz_buzz(15))
?>