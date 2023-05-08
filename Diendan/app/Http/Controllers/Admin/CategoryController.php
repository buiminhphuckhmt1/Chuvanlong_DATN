<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//Trong controller, để sử dụng đối tượng nào thì phải khai báo đối tượng đó ở đây
//đối tượng mã hóa password
use Hash;
//đối tượng thao tác csdl
use DB;

class CategoryController extends Controller
{
    //Read
    public function index(){
        //sử dụng đối tượng DB để truy vấn csdl
        /*
            DB::table("category_list") <=> select * from category_list
            orderBy("id","desc") <=> order by id desc
            paginate(4) <=> phân trang 4 bản ghi trên một trang
        */
        $data = DB::table("category_list")->orderBy("id","desc")->paginate(4);
        $action = url("backend/category/createPost");
        //gọi view, truyền dữ liệu ra view
        return view("admin.CategoryRead",["data"=>$data,"action"=>$action, ]);
    }
    //Update Get
    public function update($id){
        //tạo biến $action để đưa vào thuộc tính action của thẻ form (để biết được lúc nào create, lúc nào update)
        $action = url("backend/category/updatePost/$id");
        //lấy một bản ghi -> sử dụng hàm first()
        $record = DB::table("category_list")->where("id","=",$id)->first();
        //gọi view, truyền dữ liệu ra view
        return view("admin.CategoryCreateUpdate",["record"=>$record,"action"=>$action]);
    }
    //Update Post
    public function updatePost($id){
        $name =request("name");
        $description =request("description");
        $status =request("status");
        DB::table("category_list")->where("id","=",$id)->update(["name"=>$name,"description"=>$description,"status"=>$status]);
        return redirect(url("backend/category?notify=updatecr-success"));
    }
    //Create Get
    public function create(){
        //tạo biến $action để đưa vào thuộc tính action của thẻ form (để biết được lúc nào create, lúc nào create)
        $action = url("backend/category/createPost");
        //gọi view, truyền dữ liệu ra view
        return view("admin.CategoryCreateUpdate",["action"=>$action]);
    }
    //Create Post
    public function createPost(){
        $description =request("description");
        $name =request("name");
        $status =request("status");
        //kiểm tra xem email đã tồn tại trong csdl chưa, nếu chưa tồn tại thì mới cho update
        //Count() Đếm số bản ghi
        $check = DB::table("category_list")->where("name","=",$name)->Count();
        if($check == 0){
            //update
            DB::table("category_list")->insert(["description"=>$description,"name"=>$name,"status"=>$status]);
        }else
            return redirect(url("backend/category/?notify=category-exists"));
        //di chuyển đến url khác
        return redirect(url("backend/category?notify=creatcr-success"));
    }
    //Delete
    public function delete($id){
        //delete bản ghi
        DB::table("category_list")->where("id","=",$id)->delete();
        //di chuyển đến url khác
        return redirect(url("backend/category"));
    }
}
