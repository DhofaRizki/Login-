<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('login/form');
    }

    public function signup()
    {
        return view('anggota/form');
    }
}
