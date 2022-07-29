<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function ViewContact()
    {
        $data = " Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, omnis? ";
        return view('contact', compact('data'));
    }
    public function ViewDescription()
    {
        $database = User::all();
        return view('description', compact('database'));
    }
    public function ViewAbout()
    {
        $name = 'Anwar Sahid';
        $npm = '1815061003';

        return view('about', compact('name', 'npm'));
        // return view('about', [
        //     'nama' => $name,
        //     'nim' => $npm
        // ]);
    }
}
