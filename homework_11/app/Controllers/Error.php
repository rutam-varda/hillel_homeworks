<?php

namespace App\Controllers;

class Error implements ControllerInterface
{
    public function index() {
        var_dump('Page Error 404' );
    }
};