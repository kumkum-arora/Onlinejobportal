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

    public function login_submit(LoginRequest $request)
    {
        $credentials = $this->credentials->admin_Login($request);
        // return view('index');
        if ($credentials) {
            return view('index');
        } else {
            return Redirect()->back()->withErrors(['msg' => 'Please Enter Valid Details']);
        }
    }

    public function logout_admin()
    {
        $this->credentials->logout();
        return redirect('index');
    }
}
