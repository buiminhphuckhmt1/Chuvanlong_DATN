<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
//Trong controller, để sử dụng đối tượng nào thì phải khai báo đối tượng đó ở đây
//đối tượng mã hóa password
use Hash;
//đối tượng thao tác csdl
use DB;

class PersonalController extends Controller
{
    //Read
    public function index(){

    }
    public function mypost($id){
        $data = Post::where("user_id","=",$id)->paginate(10);
        $datacate = DB::table("category_list")->orderBy("id","desc")->paginate(10);
        return view("frontend.Mypost",compact('data'),["datacate"=>$datacate]);
    }
    public function personal($id){
        //tạo biến $action để đưa vào thuộc tính action của thẻ form (để biết được lúc nào create, lúc nào update)
        $action = url("frontend/personalPost/$id");
        //lấy một bản ghi -> sử dụng hàm first()
        $record = DB::table("users")->where("id","=",$id)->first();
        //gọi view, truyền dữ liệu ra view
        return view("frontend.Personalinf",["record"=>$record,"action"=>$action]);
    }
    public function personalPost($id){
        $firstname =request("firstname");
        $middlename =request("middlename");
        $lastname =request("lastname");
        // $type =request("type");
        $email =request("email");
        $username =request("username");
        $password = request("password");
        if (!request("avatar")==null) {
            $file = request("avatar");
            $file->move('../public/upload/user', $file->getClientOriginalName());
            $file_name= $file->getClientOriginalName();
            DB::table("users")->where("id","=",$id)->update(["avatar"=>$file_name,"firstname"=>$firstname,"middlename"=>$middlename,"lastname"=>$lastname,"username"=>$username]);

        }
        DB::table("users")->where("id","=",$id)->update(["email"=>$email,"firstname"=>$firstname,"middlename"=>$middlename,"lastname"=>$lastname,"username"=>$username]);
        //nếu password không rỗng thì update password
        if($password != ""){
            //mã hóa password
            $password = Hash::make($password);
            //update password
            DB::table("users")->where("id","=",$id)->update(["password"=>$password]);
        }
        //di chuyển đến url khác
        return redirect(url("frontend/personal/$id/?notify=personal-success"));
    }
    public function delete($id){
        //delete bản ghi
        $user = Auth::user();
        DB::table("post_list")->where("id","=",$id)->delete();
        //di chuyển đến url khác
        return redirect(url('frontend/mypost/'.$user->id));
    }
}
