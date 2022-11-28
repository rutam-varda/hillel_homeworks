<?php

namespace Core;
use App\Controllers\Error;
use App\Controllers\Home;
use App\Controllers\Admin;

class Router
{
    private string $newArr;
    private array $config = [];

    public function __construct()
    {
        $serverRequest = $_SERVER["REQUEST_URI"];
        $this->newArr = substr($serverRequest, 1);
        $this->config = include_once (__DIR__) . '/../app/Config/config.php';
        var_dump($this->config);
        echo '<br>';
        var_dump($this->newArr);
    }

    public function run()
    {
        var_dump(array_key_exists($this->newArr, $this->config));
        var_dump($this->newArr);
        if (array_key_exists($this->newArr, $this->config)) {
            $classPath = 'App\Controllers\\' . $this->getClassName();
            $obj = new $classPath();
        } else {
            $obj = new \App\Controllers\Error();
        }

//        if (class_exists($classPath)) {
//            $obj = new $classPath();
//        } else {
//            $obj = new \App\Controllers\Error();
//        }

        $methodName = $this->getMethodName();

        if (method_exists($obj, $methodName)) {
            $obj->$methodName();
        } else {
            (new Error())->index();
        }
    }

    private function getMethodName(): string
    {
        $exp = explode(':', $this->config[$this->newArr]);
        var_dump($exp[1]);
        return $exp [1];
    }

    private function getClassName(): string
    {
       $exp = explode(':', $this->config[$this->newArr]);
       var_dump($exp[0]);
        return $exp [0];
    }
}