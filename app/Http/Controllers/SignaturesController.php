<?php

namespace App\Http\Controllers;

class SignaturesController extends Controller
{
    public function index()
    {
        return view('signatures.index');
    }
    public function create()
    {
        return view('signatures.sign');
    }
}
