<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LiberaryController extends Controller
{
    public function liberaryView(){
        $libData = DB::table('students')
        //we can select tables and specific columns of both tables. 
        // ->select('students.*','liberaries.*')

        ->join('liberaries','student_id','=','stu_id')
        ->get();
        return view("liberary",["data"=>$libData]);
    }
}
