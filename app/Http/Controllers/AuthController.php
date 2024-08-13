<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.sign-in');
    }

    public function loginAction(Request $request)
    {
        // dd($request->all());
        Validator::make($request->all(), [
            'ektp' => 'required',
            'name' => 'required'
        ])->validate();

        $user = User::where('ektp', '=', $request->ektp)
            ->where('name', '=', $request->name)
            ->first();

        if (!$user) {
            throw ValidationException::withMessages([
                'name' => trans('auth.failed')
            ]);
        }
        $request->session()->regenerate();
        if(Auth::loginUsingId($user->id)){
            if(Auth::user()->level == 'admin'){
                return redirect()->route('dashboard');
            }
            else if(Auth::user()->level == 'user'){
                return redirect()->route('home');
            }
        }
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        return redirect('/login');
    }

    public function profile()
    {
        return view('profile');
    }
}
