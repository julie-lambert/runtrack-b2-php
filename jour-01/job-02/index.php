<?php
function my_count(string $string) : int{
    $count = 0;

    for($i = 0; isset($string[$i]); $i++){
        $count++;
    }
    return $count;
}
    

function my_str_reverse(string $string) : string{

    $reverse = '';
    for($i= my_count($string)-1; $i >= 0; $i--){
        $reverse.= $string[$i];
    }
    return $reverse;
}

//echo my_str_reverse('Hello');
?>