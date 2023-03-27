<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Category;

class FontviewConteoller extends Controller
{
    function show(){
    
        $Category = DB::table('categories')->get();
        return view('Fontlayout.Home',['Category' => $Category]);
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
