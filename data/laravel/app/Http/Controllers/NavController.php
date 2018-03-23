<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavController extends Controller
{
    public function Accueil()
    {
        return view('welcome');
    }
    public function Article()
    {
        return view('article');
    }
    public function Contact()
    {
        return view('contact');
    }
}
