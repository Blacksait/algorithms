<?php

function merge_sort($arr)
{
    if (count($arr) == 1) {
        return $arr;
    } else {
        $ar1 = array_slice($arr, 0, ceil(count($arr) / 2));
        $ar2 = array_slice($arr, ceil(count($arr) / 2));
        return merge(merge_sort($ar1), merge_sort($ar2));
    }
}

function merge($ar1, $ar2)
{
    $temp_ar = [];
    while (count($ar1) > 0 && count($ar2) > 0) {
        if ($ar1[0] < $ar2[0])
            $temp_ar[] = array_shift($ar1);
        else
            $temp_ar[] = array_shift($ar2);
    }

    if (empty($ar1))
        $temp_ar = array_merge($temp_ar, $ar2);
    elseif (empty($ar2))
        $temp_ar = array_merge($temp_ar, $ar1);

//Или объединить пустой массив используя array_splice
//    array_splice($temp_ar, count($temp_ar), 0, $ar1);
//    array_splice($temp_ar, count($temp_ar), 0, $ar2);

    return $temp_ar;
}

$arr = [6, 5, 3, 1, 8, 7, 2, 4, 9, 11];
print_r(merge_sort($arr));

//print_r(phpinfo());