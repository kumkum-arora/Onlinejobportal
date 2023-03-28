<?php

namespace App\Interfaces;

interface AdminInterface
{    
     // for login admin
     public function login($request);
     
     // logout
     public function logout();
}
