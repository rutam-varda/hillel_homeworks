<?php

namespace App\Models;

class Pages
{
    public function getAll(): array
    {
        return $arrPages = [
            'page1'=>'About',
            'page2'=>'Contacts',
            'page3'=>'Registration',
            'page4'=>'Login',
            'page5'=>'Admin',
        ];
    }
}