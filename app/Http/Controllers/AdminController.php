<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminpage(){

        return view('Backendlayout.Mainadmin');
    }


    public function Login(){

        return view('Backendlayout.Login');
    }
}
