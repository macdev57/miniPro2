<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate();

        return view('users.index', compact('users'));
    }
    // this section is currently onhold
    public function viewRecord()
    {
        $totalUsers = User::count();
        return view('totalUsers.viewRecord', compact('totalUsers'));
    }
}
