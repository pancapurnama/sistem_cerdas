<?php

namespace App\Http\Controllers;

use App\Models\User;
use Doctrine\DBAL\Schema\Index;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('users', ['user' => $user]);
    }
}
