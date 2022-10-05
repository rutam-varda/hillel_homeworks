<?php

// Создать родительский (главный класс)

abstract class headClass
{
    public $firstValue = 10;
    public function getFirstValue()
    {
        return $this->firstValue;
    }

    public function setFirstValue($firstValue)
    {
        $this->firstValue = $firstValue;
    }

    public $secondValue = 20;
    public function getSecondValue()
    {
        return $this->secondValue;
    }

    public function setSecondValue($secondValue)
    {
        $this->secondValue = $secondValue;
    }

    abstract public function calcValue($number);
}

// Создать 3 наследника родительского класса
class firstHeir extends headClass
{
    public $thirdValue;
    public function getThirdValue()
    {
        return $this->thirdValue;
    }

    public function setThirdValue($thirdValue)
    {
        $this->thirdValue = $thirdValue;
    }

    public function fourValue($thirdValue) {
        return $this->secondValue + $thirdValue;
    }

    public function calcValue($number)
    {
        $calcValue = $number;
        return $calcValue * $calcValue;
    }
}

$obj = new firstHeir();
$obj = new firstHeir();
echo $obj->fourValue(15)+$obj->calcValue(25);
echo '<br>';

class secondHeir extends headClass
{
    public $fifthValue;
    public function getFifthValue()
    {
        return $this->fifthValue;
    }

    public function setFifthValue($fifthValue)
    {
        $this->fifthValue = $fifthValue;
    }

    public function sixthValue($fifthValue) {
        return $this->secondValue * $fifthValue;
    }

    public function calcValue($number)
    {
        $calcValue = $number;
        return $calcValue * $calcValue;
    }
}
$obj1 = new secondHeir();
$obj1 = new secondHeir();
echo $obj1->sixthValue(1000)+$obj1->calcValue(500);
echo '<br>';

final class thirdHeir extends headClass
{
    public $seventhValue;
    public function getSeventhValue()
    {
        return $this->seventhValue;
    }

    public function setSeventhValue($seventhValue)
    {
        $this->seventhValue = $seventhValue;
    }

    public function eightValue($seventhValue) {
        return $this->secondValue - $seventhValue;
    }

    public function calcValue($number)
    {
        $calcValue = $number;
        return $calcValue + $calcValue;
    }
}
$obj2 = new thirdHeir();
$obj2 = new thirdHeir();
echo $obj2->eightValue(350)+$obj2->calcValue(50);
echo '<br>';

// Создать по 2 наследника от наследников первого уровня
class secondRankHairA extends firstHeir
{
    public $a;
    public function getA()
    {
        return $this->a;
    }

    public function setA($a)
    {
        $this->a = $a;
    }

    public function b($a) {
        return $this->thirdValue + $a;
    }

    public function c($a) {
        return $this->firstValue *$a;
    }

    public function calcValue($number)
    {
        $calcValue = $number;
        return $calcValue + $calcValue;
    }
}
$obj3 = new secondRankHairA();
$obj3 = new secondRankHairA();
$obj3 = new secondRankHairA();

echo $obj3->b(350)+$obj3->calcValue(50)+$obj3->c(1000);
echo '<br>';

class secondRankHairB extends secondHeir
{
    public $ba;
    public function getBa() {
        return $this->ba;
    }

    public function setBa($ba)
    {
        $this->ba = $ba;
    }

    public function Bb($ba) {
        return $this->firstValue * $ba;
    }

    public function Bc($ba) {
        return $this->secondValue - $ba;
    }

    public function calcValue($number)
    {
        $calcValue = $number;
        return $calcValue + $calcValue;
    }
}

$obj4 = new secondRankHairB();
$obj4 = new secondRankHairB();
$obj4 = new secondRankHairB();

echo $obj4->calcValue(20000)/$obj4->Bc(100)*$obj4->Bb(0);

