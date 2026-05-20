<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function languages()
    {
        return view('backend.masters.languages');
    }

    public function header()
    {
        return view('backend.masters.header');
    }

    public function menu()
    {
        return view('backend.masters.menus');
    }
}
