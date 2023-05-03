<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//url: public/login
Route::get("backend/login",function(){
    return View::make("admin.Login");
});
//sau khi an nut submit
Route::post("backend/login",function(){
    //lay gia tri form
    $username = request("username");
    $password = request("password");
    if(Auth::Attempt(["username"=>$username,"password"=>$password]))
        return redirect(url("backend/home"));
    else
        return redirect(url("backend/login?notify=invalid"));
});
//url: public/logout
Route::get('backend/logout',function(){
    Auth::logout();//Auth la doi tuong co san cua laravel
    return redirect(url("backend/login"));
});
//url: public/admin
Route::get("backend",function(){
    return redirect(url("backend/home"));
});
//register class HomeController
use App\Http\Controllers\Admin\HomeController;
Route::get("backend/home",[HomeController::class,"index"])->Middleware("check_login");
//register class UsersController
use App\Http\Controllers\Admin\UsersController;
//Read
Route::get("backend/users",[UsersController::class,"index"])->Middleware("check_login");
//Update Get
Route::get("backend/users/update/{id}",[UsersController::class,"update"])->Middleware("check_login");
//Update Post
Route::post("backend/users/updatePost/{id}",[UsersController::class,"updatePost"])->Middleware("check_login");
//Create Get
Route::get("backend/users/create",[UsersController::class,"create"])->Middleware("check_login");
//Create Post
Route::post("backend/users/createPost",[UsersController::class,"createPost"])->Middleware("check_login");
//Delete
Route::get("backend/users/delete/{id}",[UsersController::class,"delete"])->Middleware("check_login");
//register class CategoryController
use App\Http\Controllers\Admin\CategoryController;
//Read
Route::get("backend/category",[CategoryController::class,"index"])->Middleware("check_login");
//Update Get
Route::get("backend/category/update/{id}",[CategoryController::class,"update"])->Middleware("check_login");
//Update Post
Route::post("backend/category/updatePost/{id}",[CategoryController::class,"updatePost"])->Middleware("check_login");
//Create Get
Route::get("backend/category/create",[CategoryController::class,"create"])->Middleware("check_login");
//Create Post
Route::post("backend/category/createPost",[CategoryController::class,"createPost"])->Middleware("check_login");
//Delete
Route::get("backend/category/delete/{id}",[CategoryController::class,"delete"])->Middleware("check_login");

//register class PostsController
use App\Http\Controllers\Admin\PostsController;
//Read
Route::get("backend/posts",[PostsController::class,"index"])->Middleware("check_login");
//Update Get
Route::get("backend/posts/view/{id}",[PostsController::class,"view"])->Middleware("check_login");

Route::get("backend/posts/update/{id}",[PostsController::class,"update"])->Middleware("check_login");
//Update Post
Route::post("backend/posts/updatePost/{id}",[PostsController::class,"updatePost"])->Middleware("check_login");
//Create Get
Route::get("backend/posts/create",[PostsController::class,"create"])->Middleware("check_login");
//Create Post
Route::post("backend/posts/createPost",[PostsController::class,"createPost"])->Middleware("check_login");
//Delete
Route::get("backend/posts/delete/{id}",[PostsController::class,"delete"])->Middleware("check_login");
//---
Route::get("frontend/login",function(){
    return View::make("frontend.Login");
});
//sau khi an nut submit
Route::post("frontend/login",function(){
    //lay gia tri form
    $username = request("username");
    $password = request("password");
    if(Auth::Attempt(["username"=>$username,"password"=>$password]))
        return redirect(url("frontend/home"));
    else
        return redirect(url("frontend/login?notify=invalid"));
});
//url: public/logout
Route::get('frontend/logout',function(){
    Auth::logout();//Auth la doi tuong co san cua laravel
    return redirect(url("frontend/login"));
});
//url: public/admin
Route::get("frontend",function(){
    return redirect(url("frontend/home"));
});
//register class HomeController
use App\Http\Controllers\Frontend\HomeController;
Route::get("frontend/home",[HomeController::class,"index"]);
Route::get('frontend/home',function(){
    echo "<h1>Done</h1>";
});
