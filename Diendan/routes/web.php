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
    return View::make("auth.Login");
});
//sau khi an nut submit
Route::post("backend/login",function(){
    //lay gia tri form
    $user = Auth::user();
    $username = request("username");
    $password = request("password");
    if(Auth::Attempt(["username"=>$username,"password"=>$password]) && Auth::user()->type == 1)
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
use App\Http\Controllers\Auth\ForgotController;
Route::get('forget-password', [ForgotController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}', [ForgotController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotController::class, 'submitResetPasswordForm'])->name('reset.password.post');
//register class HomeController
use App\Http\Controllers\Admin\HomeController;
Route::get("backend/home",[HomeController::class,"index"])->Middleware("check_login");


Route::post("backend/dashboard_postweek", [HomeController::class, 'dashboard_postweek']);

//register class UsersController
use App\Http\Controllers\Admin\UsersController;
//Read
Route::get("backend/users",[UsersController::class,"index"])->Middleware("check_login");
//Update Get
Route::get("backend/users/update/{id}",[UsersController::class,"update"])->Middleware("check_login");
//Update Post
Route::post("backend/users/updatePost/{id}",[UsersController::class,"updatePost"])->Middleware("check_login");
//Create Get
Route::get("backend/users/personal/{id}",[UsersController::class,"personal"])->Middleware("check_login");
//Create Get
Route::post("backend/users/personalPost/{id}",[UsersController::class,"personalPost"])->Middleware("check_login");
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
// //Read
 Route::get("backend/posts",[PostsController::class,"index"])->Middleware("check_login");
// //Update Get
 Route::get("backend/posts/view/{id}",[PostsController::class,"view"])->Middleware("check_login");

 Route::get("backend/posts/update/{id}",[PostsController::class,"update"])->Middleware("check_login");
// //Update Post
 Route::post("backend/posts/updatePost/{id}",[PostsController::class,"updatePost"])->Middleware("check_login");
// //Create Get
 Route::get("backend/posts/create",[PostsController::class,"create"])->Middleware("check_login");
// //Create Post
 Route::post("backend/posts/createPost",[PostsController::class,"createPost"])->Middleware("check_login");
// //Delete
 Route::get("backend/posts/delete/{id}",[PostsController::class,"delete"])->Middleware("check_login");
 // //Delete comment
 Route::get("backend/posts/deletecmt/{id}",[PostsController::class,"deletecmt"])->Middleware("check_login");
 //---

 Route::get("frontend/login",function(){
     return View::make("frontend.Login");
 });
Route::post("frontend/login",function(){
    $username = request("username");
    $password = request("password");
    if (!request("remember")==null) {
        $remember = request('remember');
    }
    if(Auth::Attempt(["username"=>$username,"password"=>$password]))
        return redirect(url("frontend/home"));
    else
        return redirect(url("frontend/login?notify=invalid"));
});
Route::get('frontend/logout',function(){
    Auth::logout();//Auth la doi tuong co san cua laravel
    return redirect(url("frontend/home"));
});
Route::get("frontend",function(){
    return redirect(url("frontend/home"));
});
use App\Http\Controllers\Frontend\HomeftController;
Route::get("frontend/home",[HomeftController::class,"index"]);
Route::get("frontend/homes",[HomeftController::class,"home"]);
Route::get("frontend/follower",[HomeftController::class,"follow"]);
Route::get("frontend/tag/{id}",[HomeftController::class,"tag"]);
Route::get("frontend/alltag",[HomeftController::class,"alltag"]);
Route::get("frontend/topview",[HomeftController::class,"topview"]);
Route::get("frontend/old",[HomeftController::class,"fitterold"]);
Route::get("frontend/new",[HomeftController::class,"fitternew"]);
Route::get("frontend/question/{id}",[HomeftController::class,"viewquestion"]);
Route::post("frontend/comment/{id}",[HomeftController::class,"comment"]);
Route::get("frontend/deletecmt/{id}",[HomeftController::class,"deletecmt"])->Middleware("_login");
Route::post("frontend/search",[HomeftController::class,"search"]);
//Route::get("frontend/users/personal/{id}",[UsersController::class,"personal"])->Middleware("_login");
//Route::post("frontend/users/personalPost/{id}",[UsersController::class,"personalPost"])->Middleware("_login");


use App\Http\Controllers\Frontend\RegisterController;
Route::get("frontend/register",[RegisterController::class,"index"]);
Route::post("frontend/register/createPost",[RegisterController::class,"createPost"]);

use App\Http\Controllers\Frontend\PostsftController;
Route::get("frontend/posts/create",[PostsftController::class,"create"])->Middleware("_login");
Route::post("frontend/posts/createPost",[PostsftController::class,"createPost"])->Middleware("_login");
Route::get("frontend/posts/post/comment/{id}",[PostsftController::class,"comment"])->Middleware("_login"); 

use App\Http\Controllers\Frontend\PersonalController;
Route::get("frontend/personal/{id}",[PersonalController::class,"personal"])->Middleware("_login");
Route::get("frontend/mypost/{id}",[PersonalController::class,"mypost"])->Middleware("_login");
Route::post("frontend/personalPost/{id}",[PersonalController::class,"personalPost"])->Middleware("_login");
Route::get("frontend/delete/{id}",[PersonalController::class,"delete"])->Middleware("_login");


Route::get("frontend/login",function(){
    return View::make("frontend.Login");
});
Route::get('admin/home',function(){
    echo "<h1>Done</h1>";
});
