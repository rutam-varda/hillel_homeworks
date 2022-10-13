<?php

namespace Core;
use App\Controllers\Admin;
use App\Controllers\Home;

class Router
{
    public $a;
    public function setA($a): void
    {
        $this->a = $a;
    }

    public function run() {
        $serverRequest = $_SERVER["REQUEST_URI"];

        echo '<pre>';
        var_dump($serverRequest);
        echo '</pre>';
        echo "<br>";

        $removeFirstElement = substr($serverRequest, 1);
        //var_dump($removeFirstElement);
        echo "<br>";

        $newArr = explode("/", $removeFirstElement);
        //var_dump($newArr);
        echo "<br>";

        if (empty($newArr[0])) {
            $classNameAdmin = 'Admin';
            $classNameHome = 'Home';
        } else {
            $classNameAdmin = $newArr[0];
            $classNameHome = $newArr[0];
        }
        $classPath = 'App\Controllers\\' . $classNameAdmin . $classNameHome;

        if (class_exists($classPath)) {
            $obj = new $classPath();
        } else {
            $obj = new \App\Controllers\Error;
        }
        $obj->index();
    }
}