<?php

namespace App\Controllers;

class Home implements ControllerInterface
{
    public function index() {
        var_dump('Home Page' );
    }

    public function contact() {
        var_dump('Contact Page' );
    }
}