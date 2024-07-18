<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home; // Assuming Home model exists

class HomeController extends Controller
{
    
    public function index()
    {
        $home = Home::first(); 
    
        $data = [
            'title' => 'Home',
            'home' => $home, 
        ];
    
        return view('layouts.public.home', $data);
    }
    
}
