<?php

namespace App\Http\Controllers;

use App\Models\family;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function showProfile()
{
    $user = Auth::user();
    $familyMembers = family::where('ektp', $user->ektp)->get();

    return view('profile', compact('familyMembers'));
}
}
