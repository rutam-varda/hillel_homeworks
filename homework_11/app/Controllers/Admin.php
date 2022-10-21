<?php

namespace App\Controllers;

class Admin implements ControllerInterface
{
    public function index()
    {
        var_dump('Admin Page' );
    }

    public function edit()
    {
        var_dump('Edit Page');
    }

    public function save()
    {
        var_dump('Save Page');
    }

    public function remove()
    {
        var_dump('Remove Page');
    }
}