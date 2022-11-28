<?php

namespace App\Controllers;
use App\Models\Pages;
use App\Models\Contacts;
use App\Models\Users;
use Core\View;

class Home implements ControllerInterface
{
    public function index() {
        $obj = new Pages();
        $path = ' view_1';
        $data['people'] = $obj->getAll();
        View::generate($path, $data);
    }

    public function contact() {
        var_dump('Contact Page' );
    }
}