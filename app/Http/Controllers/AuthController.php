<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function adminauth(Request $request){


        $name=$request->user_name;
        $email=$request->email_address;
        $pass=$request->password;

        $users = DB::table('admin')
         ->where('user_name', $name)
         ->where('email_address', $email)
         ->where('password',md5($pass))
        
         ->first();




        if($users){

            Session::put('id', $users->id);
            Session::put('user_name', $users->user_name);
            Session::put('email_address', $users->email_address);
            return redirect('/admin');
        }
        else{

        Session::put ('message','your ID');
            return redirect('/login');
        }
    //  echo $name.''.$pass; 
     
    }


    public function authCheck()
    {
       
        $id=Session::get('id');
     
        if(!$id)
        {
            //echo $admin_id;
            //exit();
            return redirect('/login');
        }
       
    }







public function logout(){

 Session::put('id');
 Session::put('user_name');
 Session::put('email_address');

 Session::put('message','you are sucessfully logout');

return redirect('/login');

}











}
