<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LinksController extends Controller
{
    public function __construct()
    {
        // проверка на авторизованность
        $this->middleware('auth');
    }

    public function viewLaravel()
    {
        return view('laravel');
    }

    public function viewVue()
    {
        return view('vue');
    }
}
