<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function adminpage(){

        return view('Backendlayout.Mainadmin');
    }


    public function Login(){
      
        return view('Backendlayout.Login');
    }







}
