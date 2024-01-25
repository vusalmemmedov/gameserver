<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        return view('adminpanel.index');
    }

    public function table()
    {
        $users = User::all();

        return view('adminpanel.table', compact('users'));
    }
}
