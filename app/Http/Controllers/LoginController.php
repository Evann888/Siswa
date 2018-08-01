<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\action;
use Validator;

class LoginController extends Controller
{
  public function index()
  {
     return view('login');
  }

  function checkLogin(Request $request)
    {
        $validation = Validator::make($request->all(), [
          // 'email'   => 'required|email',
          'password'  => 'required|alpha_num|min:3'
       ]);

       if ($validation->fails())
       {
         foreach($validation->messages()->getMessages() as $field_name => $messages)
         {
             $error_array[] = $messages;
         }
          // dd($validation->messages()->getMessages());
       }
       else
       {
         $user_data = array(
            'username'  => $request->username,
            'password' => $request->password
         );
         // dd($user_data);
       }

       $output = array(
          'error'     =>  $error_array,
          // 'success'   =>  $success_output,
      );
      echo json_encode($output);


       // if(Auth::attempt($user_data))
       // {
       //   return redirect('main/successlogin');
       // }
       // else
       // {
       //   return back()->with('error', 'Wrong Login Details');
       // }
    }

    function successlogin()
    {
      return view('admin/siswa');

    }

    function logout()
    {
       Auth::logout();
       return redirect('main');
    }
}
