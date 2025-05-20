<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Cookie;
use Validator;
use App\Models\Admin;
use App\Models\users;

class LoginController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('guest:admin')->except('logout');
    // }

    public function showLoginFrom()
    {
        return view('admin.login');
    }

    // public function login(Request $request)
    // {
    //     $validator = Validator::make($request->all(), [
    //       'email'   => 'required|email',
    //       'type'   => 'required',
    //       'password' => 'required|min:6'
    //     ]);


    //     $validator->after(function ($validator) use ($request) {


    //         if (Auth::guard('admin')->attempt(['email' => $request->email,'type' => 1, 'password' => $request->password], $request->get('remember'))) {
    //           return redirect()->intended(url('admin/dashboard'));
    //         }
    //         else {
    //             $validator->errors()->add('email', 'These credentials do not match our records.');
    //         }
    //     });

    //     return back()->withErrors($validator)->withInput($request->only('email', 'remember'));
    // }

public function login(Request $request)
{
    // Step 1: Validate input
    $validator = Validator::make($request->all(), [
        'email' => 'required|email',
        'password' => 'required|min:6',
    ]);

    // Step 2: If validation fails, redirect back
    if ($validator->fails()) {
        return back()->withErrors($validator)->withInput($request->only('email', 'remember'));
    }

    // Step 3: Attempt login using admin guard
    if (Auth::guard('admin')->attempt([
        'email' => $request->email,
        'type' => 1,
        'password' => $request->password,
    ], $request->filled('remember'))) {

        return redirect()->intended('/admin/dashboard');
    }

    // Step 4: Login failed — add error and redirect back
    return back()->withErrors([
        'email' => 'These credentials do not match our records.',
    ])->withInput($request->only('email', 'remember'));
}

public function index()
    {

        return view('admin.dashboard');
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        return redirect('/admin/login');
    }

}
