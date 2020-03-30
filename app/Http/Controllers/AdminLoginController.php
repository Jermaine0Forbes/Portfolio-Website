<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use Illuminate\Support\Facades\Auth;
class AdminLoginController extends Controller
{
        public function __construct()
    {
      $this->middleware('guest:admin')->except("logout");
    }

    public function showLoginForm()
    {
      $data = [
        "page" => "login",
        "description" => "Logging into the account",
        "keywords" => "login",
        "title" => "Login",
      ];

      return view('auth.admin-login', $data);
    }

    public function login(Request $request)
    {
      // Validate the form data
      $this->validate($request, [
        'email'   => 'required|email',
        'password' => 'required|min:6'
      ]);

      // Attempt to log the user in
      if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
        // if successful, then redirect to their intended location
        return redirect()->intended(route('admin.dashboard'));
      }
      // dd("failed");
      // if unsuccessful, then redirect back to the login with the form data
      return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    public function logout(){
         // dd("something");
        Auth::guard("admin")->logout();

        return redirect("/");
    }


}
