<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('backend.users.index');
    }

    public function permissions()
    {
        return view('backend.users.permissions');
    }

    public function role()
    {
        return view('backend.users.role');
    }

    public function logs()
    {
        return view('backend.users.logs');
    }
}
