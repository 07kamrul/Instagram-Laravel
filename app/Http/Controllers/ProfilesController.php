<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function show($id)
    {
        $user = User::findOrFail($id);

        return view('home', [
            'user' => $user,
        ]);
    }
}


//1:30:02