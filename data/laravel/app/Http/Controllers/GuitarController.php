<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuitarController extends Controller
{
    public function getForm()
    {
        //$guitar = Guitar::all();

        return view('article');
    }

    public function postForm()
    {
        return view('validation');
    }
}
