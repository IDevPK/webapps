<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //create controller for homepage

    public function users(){
        $students = DB::table("students")->get();
        return $students;
    }

    public function home(){


        return view("home",['data' => $this->users()]);
    }
}
