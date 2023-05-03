<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//Trong controller, để sử dụng đối tượng nào thì phải khai báo đối tượng đó ở đây
//đối tượng mã hóa password
use Hash;
//đối tượng thao tác csdl
use DB;

class PostsController extends Controller
{
    //Read
    public function index(){
        //sử dụng đối tượng DB để truy vấn csdl
        /*
            DB::table("post_list") <=> select * from post_list
            orderBy("id","desc") <=> order by id desc
            paginate(4) <=> phân trang 4 bản ghi trên một trang
        */
        $data = DB::table("post_list")->orderBy("id","desc")->paginate(4);
        //gọi view, truyền dữ liệu ra view
        return view("admin.PostsRead",["data"=>$data]);
    }
    public function view($id){
        $dataview = DB::table("post_list")->orderBy("id");
        //gọi view, truyền dữ liệu ra view
        return view("admin.PostsView",["dataview"=>$dataview]);
    }
    //Update Get
    public function update($id){
        //tạo biến $action để đưa vào thuộc tính action của thẻ form (để biết được lúc nào create, lúc nào update)
        $action = url("backend/posts/updatePost/$id");
        //lấy một bản ghi -> sử dụng hàm first()
        $record = DB::table("post_list")->where("id","=",$id)->first();
        //gọi view, truyền dữ liệu ra view
        return view("admin.PostsCreateUpdate",["record"=>$record,"action"=>$action]);
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
        //update name
        DB::table("post_list")->where("id","=",$id)->update(["avatar"=>$avatar],["firstname"=>$firstname],["middlename"=>$middlename],["lastname"=>$lastname],["type"=>$type],["username"=>$username]);
        //nếu password không rỗng thì update password
        if($password != ""){
            //mã hóa password
            $password = Hash::make($password);
            //update password
            DB::table("post_list")->where("id","=",$id)->update(["password"=>$password]);
        }
        //di chuyển đến url khác
        return redirect(url("backend/posts"));
    }
    //Create Get
    public function create(){
        //tạo biến $action để đưa vào thuộc tính action của thẻ form (để biết được lúc nào create, lúc nào create)
        $action = url("backend/posts/createPost");
        //gọi view, truyền dữ liệu ra view
        return view("admin.PostsCreateUpdate",["action"=>$action]);
    }
    //Create Post
    public function createPost(){
        $avatar =request("avatar");
        $firstname =request("firstnamename");
        $middlename =request("middlename");
        $lastname =request("lastname");
        $type =request("type");
        $username =request("username");
        $password = request("password");
        //mã hóa password
        $password = Hash::make($password);
        //kiểm tra xem email đã tồn tại trong csdl chưa, nếu chưa tồn tại thì mới cho update
        //Count() Đếm số bản ghi
        $check = DB::table("post_list")->where("username","=",$username)->Count();
        if($check == 0){
            //update
            DB::table("post_list")->insert(["avatar"=>$avatar],["firstnamename"=>$firstname],["middlename"=>$middlename],["lastname"=>$lastname],["username"=>$username],["type"=>$type],["password"=>$password]);
        }else
            return redirect(url("backend/posts/create?notify=email-exists"));
        //di chuyển đến url khác
        return redirect(url("backend/posts"));
    }
    //Delete
    public function delete($id){
        //delete bản ghi
        DB::table("post_list")->where("id","=",$id)->delete();
        //di chuyển đến url khác
        return redirect(url("backend/posts"));
    }
}
