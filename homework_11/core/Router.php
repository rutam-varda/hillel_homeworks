<?php

namespace Core;

use App\Controllers\Error;

class Router
{
    private array $newArr = [];
    public function __construct()
    {
        $serverRequest = $_SERVER["REQUEST_URI"];
        $removeFirstElement = substr($serverRequest, 1);
        $this->newArr = explode("/", $removeFirstElement);
    }

    public function run()
    {
        $classPath = 'App\Controllers\\' . $this->getClassName();

        if (class_exists($classPath)) {
            $obj = new $classPath();
        } else {
            $obj = new \App\Controllers\Error();
        }
        $methodName = $this->getMethodName();

        if (method_exists($obj, $methodName)) {
            $obj->$methodName();
        } else {
            (new Error())->index();
        }

        $methodNameFollow = $this->getMethodNameFollow();

        if (method_exists($obj, $methodNameFollow)) {
            $obj->$methodNameFollow();
        } else {
            (new Error())->index();
        }
    }

    private function getMethodName(): string
    {
        if (empty($this->newArr[4])) {
            $methodName = 'index';
        } else {
            $methodName = $this->newArr[4];
        }
        return $methodName;
    }

    //Блок getMethodNameFollow для следующего уровня вложенности. Возможно так не правильно?
    private function getMethodNameFollow(): string
    {
        if (empty($this->newArr[5])) {
            $methodNameFollow = 'index';
        } else {
            $methodNameFollow = $this->newArr[5];
        }
        return $methodNameFollow;
    }

    private function getClassName(): string
    {
        if (empty($this->newArr[3])) {
            $className = 'Home';
        } else {
            $className = $this->newArr[3];
        }
        return ucfirst($className);
    }
}