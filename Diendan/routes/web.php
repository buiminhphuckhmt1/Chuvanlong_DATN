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

// Route::prefix('post')->group(function() {
//     Route::get('', [PostsController::class, 'index'])
//         ->name('admin.post.index');

//     Route::get('create', [PostsController::class, 'create'])
//         ->name('admin.post.create');

//     Route::post('store', [PostsController::class, 'store'])
//         ->name('admin.post.store');

//     Route::get('edit/{id}', [PostsController::class, 'edit'])
//         ->name('admin.post.edit');

//     Route::put('update/{id}', [PostsController::class, 'update'])
//         ->name('admin.post.update');

//     Route::get('delete/{id}', [PostsController::class, 'delete'])
//         ->name('admin.post.delete');
// });
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
//sau khi an nut submit
Route::post("frontend/login",function(){
    //lay gia tri form
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
//url: public/logout
Route::get('frontend/logout',function(){
    Auth::logout();//Auth la doi tuong co san cua laravel
    return redirect(url("frontend/home"));
});
//url: public/admin
Route::get("frontend",function(){
    return redirect(url("frontend/home"));
});
//register class HomeController
use App\Http\Controllers\Frontend\HomeftController;
Route::get("frontend/home",[HomeftController::class,"index"]);
Route::get("frontend/follower",[HomeftController::class,"follow"]);
Route::get("frontend/tag/{id}",[HomeftController::class,"tag"]);
Route::get("frontend/old",[HomeftController::class,"fitterold"]);
Route::get("frontend/new",[HomeftController::class,"fitternew"]);
Route::get("frontend/question/{id}",[HomeftController::class,"viewquestion"]);

Route::get("frontend/users/personal/{id}",[UsersController::class,"personal"])->Middleware("check_login");
//Create Get
Route::post("frontend/users/personalPost/{id}",[UsersController::class,"personalPost"])->Middleware("check_login");

use App\Http\Controllers\Frontend\RegisterController;
//Create Get
Route::get("frontend/register",[RegisterController::class,"index"]);
//Create Post
Route::post("frontend/register/createPost",[RegisterController::class,"createPost"]);

use App\Http\Controllers\Frontend\PostsftController;
//Read
//Route::get("frontend/posts",[PostsftController::class,"index"])->Middleware("_login");
//Update Get
//Route::get("backend/posts/update/{id}",[PostsController::class,"update"])->Middleware("_login");
//Update Post
//Route::post("backend/posts/updatePost/{id}",[PostsController::class,"updatePost"])->Middleware("_login");
//Create Get
Route::get("frontend/posts/create",[PostsftController::class,"create"])->Middleware("_login");
//Create Post
Route::post("frontend/posts/createPost",[PostsftController::class,"createPost"])->Middleware("_login");
//Delete
//Route::get("backend/posts/delete/{id}",[PostsController::class,"delete"])->Middleware("_login");
//---
Route::get("frontend/login",function(){
    return View::make("frontend.Login");
});
Route::get('admin/home',function(){
    echo "<h1>Done</h1>";
});
