<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user();

        return view('foro.profile', compact('user'));
    }

    public function showUser($user)
    {
        $user = User::where('username', $user)
            ->select(
                'username', 
                'profile_photo', 
                'created_at'
            )->first();

        return view('foro.profile', compact('user'));
    }
}
