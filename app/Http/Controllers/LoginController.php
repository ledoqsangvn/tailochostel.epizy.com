<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use File;
use Illuminate\Http\Request;
use App\Models\Room;


class LoginController extends Controller
{
    public function login()
    {
        return view('admin.accounts.login');
    }
    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|min:6',
            'password' => 'required|min:6'
        ], [
                'username.required' => 'Please enter username',
                'username.min:6' => 'Username must be 6 or more',
                'password.required' => 'Please enter password',
                'password.min:6' => 'Password must be 6 or more'
            ]);
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            return redirect('/admin')->with('notify', 'Login success');
        } else {
            return redirect('/login')->with('notify', 'Login failed');
        }
    }
    public function logOut()
    {
        Auth::logout();
        return redirect('/')->with('notify', 'Logout success');
    }
}
