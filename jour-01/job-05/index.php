<?php

function my_is_prime(int $number) : bool{

    if($number <= 1){
        return false;
    }
    for($i = 2; $i < $number; $i++){
        if($number % $i === 0){
            return false;
        }
    }
    return true;
}

//var_dump(my_is_prime(5))
?>