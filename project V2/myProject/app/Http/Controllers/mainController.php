<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainController extends Controller
{
    public function mainPage()
    {
        return view('test');
    }

    public function loginPage()
    {
        return view('login');
    }

    public function createPage()
    {
        return view('create');
    }
}
