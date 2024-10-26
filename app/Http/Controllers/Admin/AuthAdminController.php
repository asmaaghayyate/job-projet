<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AuthAdminController extends Controller
{
    //


    public function Login(Request $request)
    {
       // dd($request);
        $this->validate($request, [
            'email' => 'required|email|exists:admins,email',
            'password' => 'required|min:2',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            //dd($credentials);

            return redirect()->intended('/admin/index');
        } else {
            return redirect()->back()->with([
                'error' => 'Ces informations d\'identification ne correspondent pas à nos dossiers.',
            ]);
        }
    }

 public  function logout()
    {

        Auth::guard('admin')->logout();
        return redirect('/admin');
    }




}
