<?php

class InsertSort
{
    public function insertSortAl($arr)
    {
        for ($i = 1;$i < count($arr);$i++){
            $cur = $arr[$i];//Нужен, чтобы не стирался параметр при $last+1
            $last = $i -1;

            while ($last >= 0 && $arr[$last] > $cur){
                $temp = $arr[$last];
                list($arr[$last+1],$arr[$last]) = [$temp,$arr[$last+1]];//Меняем след эл на прошлый
                $last--;
            }

        }
            return $arr;
    }
}

$arr = [5,3,8,4,1];

$class = new InsertSort();
$arr = $class->insertSortAl($arr);
print_r($arr);