<?php

// Создать функцию принимающую массив произвольной вложенности и определяющий любой элемент номер
// которого передан параметром во всех вложенных массивах.

$arr = [
    1,
    [
        1,
        2,
        3,
        4,
        [
            5,
            6,
            7
        ],
        5
    ],
    2,
    3
];

function arrayCalc(array $arr, int $exteriorKey): array {
    $result = [];
    foreach ($arr as $key => $value) {
        if (is_array($value)) {
            $result = array_merge($result, arrayCalc($value, $exteriorKey));
        } else {
            if ($key === $exteriorKey) {
                $result[] = $value;
            }
        }
    }
    return $result;
}
var_dump(arrayCalc($arr, 2));
echo '<br>';


//Создать функцию которая считает все буквы b в переданной строке, в случае если передается не строка функция должна возвращать false

$existentStr = 'abra cadabra';
$subStr = 'b';

function searchLetter(string $search, string $res): int {
    return substr_count($search, $res);
}
var_dump(substr_count($existentStr, $subStr));
echo '<br>';

//Создать функцию которая считает сумму значений всех элементов массива произвольной глубины

function arrSumRecursive(array $arr): int {
    $sum = 0;
    foreach ($arr as $value) {
        if (is_array($value)) {
            $sum += arrSumRecursive($value);
        } else {
            $sum += $value;
        }
    }
    return $sum;
}
var_dump(arrSumRecursive($arr));
echo '<br>';

// Создать функцию которая определит сколько квадратов меньшего размера можно вписать в квадрат большего размера размер возвращать в float

$squareFirst = 36;
$squareSecond = 49;

function compareSquare(int $squareFirst, int $squareSecond): float {
    return $squareFirst/$squareSecond;
}
var_dump(compareSquare($squareFirst, $squareSecond));