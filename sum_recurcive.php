<?php
$arr = [1,2,4,10,8,5,11];

function sum($arr){
    if ($arr == [])
        return 0;
    else
        return array_shift($arr) + sum($arr);
}

function max_value($arr){
    if ($arr == [])
        return 0;
    else
       return max(array_shift($arr),max_value($arr));
}

function counter($arr){
    if ($arr == [])
        return 0;
    else
        return 1 + counter(array_slice($arr,1));
}


$response_sum = sum($arr);
$response_max = max_value($arr);
$response_count = counter($arr);
print_r($response_sum.PHP_EOL);
print_r($response_max.PHP_EOL);
print_r($response_count);