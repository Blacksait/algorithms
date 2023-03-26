<?php

/**
 * Алгоритм пузырьковый
 */

class bubble
{
    public function sort($arr)
    {
        for ($i = 0; $i <= count($arr); $i++) {
            for ($j = 0; $j < count($arr) - 1; $j++) {
                if ($arr[$j] > $arr[$j + 1]) {
                    $first = $arr[$j];
                    $second = $arr[$j + 1];
                    $arr[$j + 1] = $first;
                    $arr[$j] = $second;
                }
            }
        }

        return $arr;
    }
}

for ($i = 0; $i < 20; $i++) {
    $arr[] = mt_rand(1, 20);
}

$class = new bubble();
$response = $class->sort($arr);
print_r($response);