<?php

/**
 * Алгоритм бинарного поиска
 */

class binary
{
    public function sort($need, $arr, $iteration)
    {
        if (count($arr) == 1){
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
            $iteration++;
            return $this->sort($need, $arr, $iteration);
        } else {
            return [$arr[$cut], $iteration];//Результат, кол-во итераций для нахождения
        }
    }
}

$arr = range(0, 250);

$class = new binary();
$response = $class->sort(250, $arr, 0);
print_r($response);