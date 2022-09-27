<?php

$arr = [
    ['name' => 'John', 'email' => 'john@gmail.com', 'tel' => '+380951112233', 'sex' => 'man'],
    ['name' => 'Kate', 'email' => 'Kate@gmail.com', 'tel' => '+380951112244', 'sex' => 'woman'],
    ['name' => 'Peter', 'email' => 'Peter@gmail.com', 'tel' => '+380951112255', 'sex' => 'man'],
    ['name' => 'Jasmin', 'email' => 'Jasmin@gmail.com', 'tel' => '+380951112266', 'sex' => 'woman']
];

function listArr(array $arr) : string
{
    $html = '<ul>';
    $html .= '<li>';
    $arrKeys = array_keys($arr[0]);
    foreach ($arrKeys as $key) {
        $html .= "<h3>$key</h3>";
    }
    $html .= '</li>';

    foreach ($arr as $subArray) {
        $html .= '<li>';
        foreach ($subArray as $value) {
            $html .= "<li>$value</li>";
        }
        $html .= '</li>';
    }

    $html .= '</ul>';

    return $html;
}
print_r(listArr($arr));
?>

<style>
    ul {
        list-style: none;
    }
</style>

