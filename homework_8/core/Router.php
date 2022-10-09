<?php

namespace Core;
class Router
{
    public $a = 100;
    public function run($a) {
        var_export($this->a);
    }
}

$obj = new Router();
echo $obj->run(100);