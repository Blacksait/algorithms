<?php

/**
 * Алгоритм сортировки выборкой
 */

class select_search{
    public function sort($arr){
        for ($i=0;$i<count($arr);$i++){
            $min = $arr[$i];
            $index = $i;

            for ($j=$i+1;$j<count($arr);$j++){
                if ($arr[$j] < $min){
                    $min = $arr[$j];
                    $index = $j;
                }
            }

           list($arr[$i],$arr[$index]) = [$arr[$index],$arr[$i]];

            //Временная переменная
//            $temp = $arr[$i];
//            $arr[$i] = $arr[$index];
//            $arr[$index] = $temp;

        }

        return $arr;
    }
}

for ($i = 0;$i < 200;$i++){
    $arr[] = mt_rand(1,200);
}

$class = new select_search();
$response = $class->sort($arr);
print_r($response);