<?php

namespace App\Models;

class Users
{
    public function getAll(): array
    {
        return $arrUsers = [
            'name1'=>'Vasa',
            'name2'=>'Ivan',
            'name3'=>'Petro',
            'name4'=>'John',
            'name5'=>'James',
        ];
    }
}