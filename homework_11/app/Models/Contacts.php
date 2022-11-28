<?php

namespace App\Models;

class Contacts
{
    public function getAll(): array
    {
        return $arrContacts = [
            'tel1'=>'1112233',
            'tel2'=>'2222233',
            'tel3'=>'3332233',
            'tel4'=>'4442233',
            'tel5'=>'5552233',
        ];
    }
}