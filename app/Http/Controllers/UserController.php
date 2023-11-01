<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\Exists;

class UserController extends Controller
{
    //create controller for homepage

    public function home(){

        //with pagination 
        $students = DB::table('students')->simplePaginate(2);
        //without pagination
        // $students = DB::table("students")
        // // ->orderBy('name')
        // // ->orderBy('age', 'desc')
        // // ->orderBy('age', 'asc')
        // //latest() without get() will return array and latest added record will be shown here. oldest(), inRandomOrder()
        // //first() without get() will return array and first record will be shown. 
        // ->get()->sortBy('student_id');

        // ->count() will count all the data base records. 
        //max('age'), min('age'), avg('age'), sum('age') for integer and float values
        return view("home",['data' => $students]);
    }

    public function user(string $id){
        $user = DB::table('students')->where('student_id',$id)->get();
        // $user = DB::table('students')->find($id);
           
        return view('user',['data'=>$user]);
    }

    public function updateUserPage(string $id){
                $data = DB::table('students')->where("student_id",$id)->get();
                $user = collect($data)->first();

                return view("userupdate",["data"=>$user]);

    }

    public function updateUser(Request $req,string $id){

        $updateuser = DB::table('students')
        ->where('student_id',$id)
        ->update(
            [
            'name' =>$req->name,
            'email'=>$req->email,
            'city' =>$req->city,
            'subject' =>$req->subject,
            'percentage'=>$req->percentage,
            'age'=>$req->age,
            'updated_at'=>now()

            ]
        );
        if($updateuser){
        return redirect()->route('home');
        }
        else{
            "<h2>Update error Occured</h2>";
        }
    }

    public function deleteAll(){
        $msg = "Nothing to Delete";
        if(!DB::table("students")->get()->isEmpty()){
               $students = DB::table("students")->truncate();
                return redirect()->route("home")->with(["message"=>"Students data reset Successfully"]);
        }else{
            return redirect()->route("home")->with(["message"=>$msg]);
        }
    

        
      
    

        

    }
    public function deleteUser(string $id){
            $deleuser = DB::table("students")->where("student_id",$id)->delete();
            // $deleuser = DB::table("students")->where("student_id",$id)->truncate();
            if($deleuser){
                return redirect()->route("home")->with(["message"=>"Data Deleted Successfully"]);
            }
            else{
                return "<h2> Delete Error</h2><a href='".route('home')."'>Go Back to Home</a>";
            }
    }
    public function createUser(Request $req){
         $user = DB::table('students')
        ->insert([
            // 'name' =>fake()->name(),
            'name' =>$req->name,
            'email'=>$req->email,
            'city' =>$req->city,
            // 'subject' =>fake()->text(10),
            'subject' =>$req->subject,
            'percentage'=>$req->percentage,
            // 'percentage'=>fake()->numberBetween(0,100),
            'age'=>$req->age,
            'created_at'=>now(),
            'updated_at'=>now()
            // 'age'=>fake()->numberBetween(10,60),
        ]);
        if($user){
            return redirect()->route('home');
        }else{
            return "<h2>Error Occured</h2>";
        }
    }

    public function newuser(){
    return view("newuser");
    }
}




//queries to get specific data from table

//limit(3)->offset(3) are also methods. limit will limit to 3records, offset will decide where to start, take() and skip or same as limit and offset of laravel methods

//this will get data from name and age colum only. 
// $students = DB::table("students")
// ->select('name','age')
// ->get();

// get data from tables by renaming table name
// $students = DB::table("students")
// ->select('name','email as user_email')
// ->get();

//distinct to get unique values from column.
//we don't want to repeat value from the data. This will get all the records from city and will show every value once to us 
// $students = DB::table('students')
// ->select('city')
// ->distinct()
// ->get();

//Laravel have its own method too wich can select two column and get their data. pluck('name','email') this method returns data in array form. By passing two values It will give data in key value pairs. 

//where('city','lahore') will give us data of lahore city only. we can use where as many times. Like if we want to get users from multan also then we will pass another where() method. digits can also be passed. where('age','=', 20), where('name','like','S%') multiple conditions can also pass in one where() using []. where([['city','=','lahore'],['age','>','20']])
//orWhere('age','<','18') or condition 
//whereBetween('id',[3,6]) this can be used with integer values.
//whereNotBetween('age',[15,20]) give records where ages are not between
//whereIn('id',[2,5,11,20]) record from these values
//DB::table('users')->whereIn('city',['multan','lahore','sahiwal','faisalabad']) record from these values
//DB::table('users')->whereNotIn('city',['multan','lahore','sahiwal','faisalabad']) record not from these values
//DB::table('users')->orWhereNotIn('city',['multan','lahore','sahiwal','faisalabad']) record not from these values while using with another where value
//whereNull('email') selects and fetches data where email value have null values.  whereNotNull can also be used
//methods to work with date and time. 
//DB::table('users')->whereDate('created_at'.'2023-10-31') provides user data of givin date. 
//DB::table('users')->whereMonth('created_at'.'10') provides user data of givin month. 
//DB::table('users')->whereDay('created_at'.'31') provides user data of givin day. 
//DB::table('users')->whereYear('created_at'.'2023') provides user data of givin year. 
//DB::table('users')->whereTime('created_at'.'08:01:30') provides user data of givin time. 

//using conditions 
// if(DB::table('orders')->where('id',1)->exists()) returns true if data exists. doesntExist() viseversa method.

//orderBy() is a mthod to pass for data order




