<?php


function sort1($need, $arr)
{
    print_r($arr);
    if (count($arr) == 1) {
        return [];
    }
    $count = count($arr);
    $cut = intval($count / 2);

    if ($arr[$cut] != $need) {
        if ($need < $arr[$cut]) {
            $arr = array_slice($arr, 0, $cut);
        } else {
            $arr = array_slice($arr, $cut, count($arr));
        }
        return sort1($need, $arr);
    } else {
        return $arr[$cut];
    }
}

$ar = [-7, 0, 2, 3, 6, 8, 10, 15, 18, 20];
$k = 10;

foreach ($ar as $el) {
    $need = $k - $el;
    $res = sort1($need, $ar);
    if (!empty($res)) {
        print_r($el . ' - ' . $res);
        die();
    }
}

//$response = sort1(19,$ar);
//print_r($response);
