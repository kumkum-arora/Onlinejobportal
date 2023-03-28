<?php

namespace App\Repositories;

use App\Interfaces\AdminInterface;
use Illuminate\Support\Facades\Auth;
use  App\Models\User;
use Illuminate\Support\Facades\Redirect;

class AdminRepository implements AdminInterface
{
    public function login($request)
    {
        $username = $request->get('email');
        $password = $request->get('password');
        $credentials = User::where('email', $username)->where('password', $password)->first();
        if ($credentials) {
            Session()->put("user_session", $username);
        }
        return $credentials;
    }

    public function logout()
    {
        Session()->flush();
    }
}
