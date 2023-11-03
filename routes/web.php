<?php

use App\Http\Controllers\LiberaryController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });
Route::controller(UserController::class)->group(function () {

  Route::get("/","home")->name("home");
Route::get("/user/{id}",'user')->name("user");

Route::post("/updateuser/{id}","updateUser",)->name('updateuser');
Route::get("/updateuserpage/{id}",'updateUserPage')->name("update.userPage");

Route::get("/deleteuser/{id}",'deleteUser')->name("deleteuser");
Route::post("/add",'createUser')->name("createuser");
Route::get("/deleteall",'deleteAll')->name("deleteall");
Route::get("/newuser","newuser")->name("addUser");

});

Route::controller(LiberaryController::class)->group(function(){
  Route::get('/liberary','liberaryView')->name('liberary');
});



// Route::get("/",[UserController::class,'home'])->name("home");
// Route::get("/user/{id}",[UserController::class,'user'])->name("user");
// Route::get("/updateuser/{id}",[UserController::class,'updateUser'])->name("updateuser");
// Route::get("/deleteuser/{id}",[UserController::class,'deleteUser'])->name("deleteuser");
// Route::get("/createuser",[UserController::class,'createUser'])->name("createuser");
// Route::get("/deleteall",[UserController::class,'deleteAll'])->name("deleteall");