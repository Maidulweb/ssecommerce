<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login()
    {
       return view('frontend.auth.login');
    }

    public function loginprocess()
    {

    }

    public function register()
    {
        return view('frontend.auth.register');
    }

    public function registerprocess(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'phone_number' => 'required|min:11|max:13|unique:users,phone_number',
            'password' => 'required|min:6',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        User:create([
            'name' => $request->input('name'),
            'email' => strtolower($request->input('email')) ,
            'phone_number' => $request->input('phone_number'),
            'password' => bcrypt($request->input('password')),
        ]);
    }
}
