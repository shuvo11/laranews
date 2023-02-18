<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FontviewConteoller extends Controller
{
    function show(){

        return view('Fontlayout.Home');
    }

    function travel(){

        return view('Fontlayout.Travel');
    }


    function sports(){

        return view('Fontlayout.Sports');
    }


    function politics(){

        return view('Fontlayout.Politics');
    }

    function magazine(){

        return view('Fontlayout.Magazine');
    }

    function business(){

        return view('Fontlayout.business');
    }

    function arts(){

        return view('Fontlayout.arts');
    }

    function contact(){

        return view('Fontlayout.Contact');
    }

}
