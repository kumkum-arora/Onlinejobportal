<?php

namespace App\Interfaces;

interface AdminInterface
{    
     // for login admin
     public function admin_Login($request);
     
     // logout
     public function logout();
}
