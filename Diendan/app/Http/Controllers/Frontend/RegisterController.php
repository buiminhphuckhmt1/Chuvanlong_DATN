<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//Trong controller, để sử dụng đối tượng nào thì phải khai báo đối tượng đó ở đây
//đối tượng mã hóa password
use Hash;
//đối tượng thao tác csdl
use DB;

class RegisterController extends Controller
{
    //Read
    public function index(){
        $action = url("frontend/register/createPost");
        return view("frontend.Register",["action"=>$action]);
    }
    public function createPost(){
        $firstname =request("firstname");
        $middlename =request("middlename");
        $lastname =request("lastname");
        $email =request("email");
        $username =request("username");
        $password = request("password");
        $ftpassword = request("ftpassword");
        $type=2;
        $avatar="logo.png";
        //mã hóa password
        if (request("password")==request("ftpassword")) {
            return redirect(url("frontend/register/?notify=password-exists"));
        }
        else{
            $password = Hash::make($password);
        }
        if (request("terms")==null) {
            return redirect(url("frontend/register/?notify=confirm-exists"));
        }
        //kiểm tra xem email đã tồn tại trong csdl chưa, nếu chưa tồn tại thì mới cho update
        //Count() Đếm số bản ghi
        $check = DB::table("users")->where("username","=",$username)->Count();
        $checkemail = DB::table("users")->where("email","=",$email)->Count();
        if(!$check == 0){
            return redirect(url("frontend/register/?notify=username-exists"));
        }
        elseif(!$checkemail ==0){
            return redirect(url("frontend/register/?notify=email-exists"));
        }else
            DB::table("users")->insert(["email"=>$email,"firstname"=>$firstname,"middlename"=>$middlename,"lastname"=>$lastname,"username"=>$username,"avatar"=>$avatar,"type"=>$type,"password"=>$password]);
        //di chuyển đến url khác
        return redirect(url("frontend/login"));
    }
}