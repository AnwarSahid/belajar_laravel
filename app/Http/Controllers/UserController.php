<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getAllUserData()
    {
        $data = User::all();
        return view('user.index', [
            'users' => $data
        ]);
    }
}
