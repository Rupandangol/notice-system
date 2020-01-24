<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function loginPage()
    {
        return view('Backend.pages.login');
    }

    public function loginPageAction(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        $username = $request->username;
        $password = $request->password;
        if (Auth::guard('admin')->attempt(['username' => $username, 'password' => $password])) {
            return redirect()->intended(route('dashboard'));
        }
        return redirect()->back()->with('fail', 'Invalid Credentials');
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect(route('loginPage'));
    }
}
