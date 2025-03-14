<?php

namespace App\Controllers;

class Welcome_message extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
}
