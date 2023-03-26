<?php

/**
 * Алгоритм быстрой сортировки
 */

/**
 * Завершение каждого уровня стека требует O(n)
 * Кол-во уровней стека O(log n)
 *
 * В худшем случае выбираем опорным элементом => меньший элемент O(n) * O(n) = O(n^2)
 * В лучшем случае выбираем опорным элементом => средний элемент O(n) * O(log n) = O(n log n)
 *
 */
class qsort
{
    public function quick_sort($arr)
    {
        if (count($arr) <= 1) {//Базовый случай
            return $arr;
        } else {
            $larger = [];
            $less = [];
            $index = rand(0, count($arr) - 1);//Если выбирать опорный элемент случайно, то в среднем сортировка завершается за O(n log n)
            $support_element = $arr[$index];//опорный элемент

            array_splice($arr, $index, 1);
            foreach ($arr as $el) {
                if ($el < $support_element)
                    $less[] = $el;
                else
                    $larger[] = $el;
            }
            return array_merge($this->quick_sort($less), [$support_element], $this->quick_sort($larger));//Рекурсивный случай
        }
    }
}
$arr = [5, 11, 2, 4, 10, 6, 23, 3];
$class = new qsort();
$response = $class->quick_sort($arr);
print_r($response);