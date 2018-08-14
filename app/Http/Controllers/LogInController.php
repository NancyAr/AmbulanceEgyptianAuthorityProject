<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\users;
use DB;




class LogInController extends Controller
{

   

    public function logpage()                                           
    {                                                               
    
        return view('index');
    }

    public function login(Request $request)
    {
  
     
      $id = $request->input('id');
      $password = $request->input('Password');

      $checkLogin = DB::table('users')->where(['id'=>$id,'password'=>$password])->get();
      if(count($checkLogin)  >0)
      {
        return redirect('/Complaints');
      }
      else                                                            // if username or password is not correct.                                                                      
      {
          $msg = "إسم المستخدم او كلمة المرور غير صحيحة ";
          return redirect('/')->witherrors($msg);
      }

    }

    public function HospitalsPage()                                           
    {                                                               
    
        return view('HospitalsView');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
