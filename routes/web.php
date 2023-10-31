<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });
Route::controller(UserController::class)->group(function () {

  Route::get("/","home")->name("home");
Route::get("/user/{id}",'user')->name("user");
Route::get("/updateuser/{id}",'updateUser')->name("updateuser");
Route::get("/deleteuser/{id}",'deleteUser')->name("deleteuser");
Route::post("/add",'createUser')->name("createuser");
Route::get("/deleteall",'deleteAll')->name("deleteall");

});

Route::get("/newuser",function(){
  return view("newuser");
})->name("addUser");
// Route::get("/",[UserController::class,'home'])->name("home");
// Route::get("/user/{id}",[UserController::class,'user'])->name("user");
// Route::get("/updateuser/{id}",[UserController::class,'updateUser'])->name("updateuser");
// Route::get("/deleteuser/{id}",[UserController::class,'deleteUser'])->name("deleteuser");
// Route::get("/createuser",[UserController::class,'createUser'])->name("createuser");
// Route::get("/deleteall",[UserController::class,'deleteAll'])->name("deleteall");