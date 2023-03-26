<?php
//Обычная рекурсия
function factorial($number){
    if($number == 1)//Базовый случай рекурсии
        return 1;
    else//Рекурсивный случай
        return $number * factorial($number - 1);//Заполняем стек вызова
}
//Хвостовая рекурсия
function factorialTail($number, $result = 1){
    if ($number == 1)
        return $result;
    else
        return factorialTail($number - 1, $result * $number);
}

print_r(factorial(5));//Когда отрабатывает бызовый случай, возвразаются параметры из стека вызова (1,2,6,24,120)
print_r(factorialTail(5));//Не заполняем стек, а передаем результат в следущую итерацию, позволяет экономить время без заполнения стека (1,5,20,60,120)