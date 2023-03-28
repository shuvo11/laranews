<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Category;

class FontviewConteoller extends Controller
{
    public function show(){
    
        $Category = DB::table('categories')->get();
        return view('Fontlayout.Home',['Category' => $Category]);
    }

    public  function travel(){
        $Category = DB::table('categories')->get();
        return view('Fontlayout.Travel',['Category' => $Category]);
    }


    public function sports(){

        return view('Fontlayout.Sports');
    }


    public  function politics(){

        return view('Fontlayout.Politics');
    }

    public  function magazine(){

        return view('Fontlayout.Magazine');
    }

    public  function business(){

        return view('Fontlayout.business');
    }

    public function arts(){

        return view('Fontlayout.arts');
    }

    public  function contact(){

        return view('Fontlayout.Contact');
    }

}
