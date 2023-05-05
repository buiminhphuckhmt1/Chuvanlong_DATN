<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//Trong controller, để sử dụng đối tượng nào thì phải khai báo đối tượng đó ở đây
//đối tượng mã hóa password
use Hash;
//đối tượng thao tác csdl
use DB;

class UsersController extends Controller
{
    //Read
    public function index(){
        //sử dụng đối tượng DB để truy vấn csdl
        /*
            DB::table("users") <=> select * from users
            orderBy("id","desc") <=> order by id desc
            paginate(4) <=> phân trang 4 bản ghi trên một trang
        */
        $data = DB::table("users")->orderBy("id","desc")->paginate(4);
        //gọi view, truyền dữ liệu ra view
        return view("admin.UsersRead",["data"=>$data]);
    }
    //Update Get
    public function update($id){
        //tạo biến $action để đưa vào thuộc tính action của thẻ form (để biết được lúc nào create, lúc nào update)
        $action = url("backend/users/updatePost/$id");
        //lấy một bản ghi -> sử dụng hàm first()
        $record = DB::table("users")->where("id","=",$id)->first();
        //gọi view, truyền dữ liệu ra view
        return view("admin.UsersCreateUpdate",["record"=>$record,"action"=>$action]);
    }
    //Update Post
    public function updatePost($id){
        $avatar =request("avatar");
        $firstname =request("firstname");
        $middlename =request("middlename");
        $lastname =request("lastname");
        $type =request("type");
        $username =request("username");
        $password = request("password");
        // $file=request("avatar");
        // $file_name=$file->getClientoriginalName();
        // $file->move(public_path('upload/user'), $file_name);
        //update name
        DB::table("users")->where("id","=",$id)->update(["avatar"=>$avatar,"firstname"=>$firstname,"middlename"=>$middlename,"lastname"=>$lastname,"type"=>$type,"username"=>$username]);
        //nếu password không rỗng thì update password
        if($password != ""){
            //mã hóa password
            $password = Hash::make($password);
            //update password
            DB::table("users")->where("id","=",$id)->update(["password"=>$password]);
        }
        //di chuyển đến url khác
        return redirect(url("backend/users"));
    }
    //Create Get
    public function create(){
        //tạo biến $action để đưa vào thuộc tính action của thẻ form (để biết được lúc nào create, lúc nào create)
        $action = url("backend/users/createPost");
        //gọi view, truyền dữ liệu ra view
        return view("admin.UsersCreateUpdate",["action"=>$action]);
    }
    //Create Post
    public function createPost(){
        $avatar =request("avatar");
        $firstname =request("firstname");
        $middlename =request("middlename");
        $lastname =request("lastname");
        $type =request("type");
        $username =request("username");
        $password = request("password");
        //mã hóa password
        $password = Hash::make($password);
        //kiểm tra xem email đã tồn tại trong csdl chưa, nếu chưa tồn tại thì mới cho update
        //Count() Đếm số bản ghi
        $check = DB::table("users")->where("username","=",$username)->Count();
        if($check == 0){
            //update
            DB::table("users")->insert(["avatar"=>$avatar,"firstname"=>$firstname,"middlename"=>$middlename,"lastname"=>$lastname,"username"=>$username,"type"=>$type,"password"=>$password]);
        }else
            return redirect(url("backend/users/create?notify=username-exists"));
        //di chuyển đến url khác
        return redirect(url("backend/users"));
    }
    //Delete
    public function delete($id){
        //delete bản ghi
        DB::table("users")->where("id","=",$id)->delete();
        //di chuyển đến url khác
        return redirect(url("backend/users"));
    }
}
