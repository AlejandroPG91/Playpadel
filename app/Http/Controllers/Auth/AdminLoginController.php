<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{

    public function __construct()
    {
      $this->middleware('guest:admin');
    }
    public function showLoginForm()
    {
      return view('auth.admin-login');
    }

    public function login(Request $request)
    {
      // Validar el login del user
      $this->validate($request,[
        'email' => 'required|email',
        'password' => 'required|min:6'
      ]);

      // Autentificar el login del user
      if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)){
        // Si entras, redirijir a su localisacion
        return redirect()->intended(route('admin.dashboard'));
      }

      // si no entras, mandar al mensaje de error
      return redirect()->back()->withInput($request->only('email', 'remember'));
    }
}
