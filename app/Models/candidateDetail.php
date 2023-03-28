<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class candidateDetail extends Model
{
    use HasFactory;
    protected $table = "candidatedetails";
    public $timestamps = false;

    protected $fillable = [

        'name',
        'email',
        'password',
        'phone',
        'address',
        'city' ,
        'state' ,
        'country',
        'postcode',
        'dob',
        'qualification', 
        'employeetype', 
        'expdetails', 
        'hobby', 
        'resumefile', 
        'status',
        'ticketid',
    ];
}
