<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index()
    {
        return view('profiles.index');
    }

    public function show($id)
    {
        $user = User::findOrFail($id);

        return view('profiles.index', [
            'user' => $user,
        ]);
    }
}


//1:30:02