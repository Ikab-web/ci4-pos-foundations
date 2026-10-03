<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index(): string
    {
        return view('landing_view');
    }

    public function about(): string
    {
        return view('about_view');
    }
}
