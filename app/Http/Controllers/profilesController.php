<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;

class profilesController extends Controller
{
    public function index($user)
    {
        $user = User::find($user);
        return view('home', [
            'user' => $user
        ]);
    }
}

