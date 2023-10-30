<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //create controller for homepage

    public function home(){

        return view("home");
    }
}
