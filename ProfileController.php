<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = Profile::first(); 



        $data = [
            'profile' => $profile,
            'title' => 'Profile'
        ];

        return view('layouts.public.profile', $data);
    }
}
