<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\View\View;

class UserController extends Controller
{
    public function show(): View
    {
        return view('welcome');
    }

    public function index(): View
    {
        return view('truyvan');
    }
}
