<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
use App\Models\Users;
class UserController extends Controller
{
   function login(){
       //return DB::select("select * from user");
       return Users::all();
   }
}
