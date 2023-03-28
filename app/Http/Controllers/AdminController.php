<?php

namespace App\Http\Controllers;

use App\Interfaces\AdminInterface;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;

class AdminController extends Controller
{
    private $credentials;

    public function __construct(AdminInterface $credentials)
    {
        $this->credentials = $credentials;
    }

    public function login(LoginRequest $request)
    {
        $credentials = $this->credentials->login($request);
        if ($credentials) {
            return view('index');
        } else {
            $message = 'Please Enter Valid Details';
            return Redirect()->back()->withErrors(['msg' => $message]);
        }
    }

    public function logout()
    {
        $this->credentials->logout();
        return redirect('index');
    }
}
