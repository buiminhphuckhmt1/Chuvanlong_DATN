<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
        // $data = DB::table("post_list")->orderBy("id","desc")->paginate(10);
        $action = url("backend/users/createPost");
        $datacate = DB::table("category_list")->orderBy("id","desc")->paginate(10);
        // //gọi view, truyền dữ liệu ra view
        // return view("admin.PostsRead",["data"=>$data,"action"=>$action]);
        $posts = Post::paginate(20);

        return view('admin.PostsRead', compact('posts'),["action"=>$action,"datacate"=>$datacate]);
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
        $datacate = DB::table("category_list")->orderBy("id","desc")->paginate(10);
        //gọi view, truyền dữ liệu ra view
        return view("admin.PostsCreateUpdate",["record"=>$record,"action"=>$action,"datacate"=>$datacate]);
    }
    //Update Post
    public function updatePost($id){
        $title =request("title");
        $category_id =request("category_id");
        $content =request("content");
        $status =request("status");
        //update name
        DB::table("post_list")->where("id","=",$id)->update(["title"=>$title,"category_id"=>$category_id,"content"=>$content,"status"=>$status]);
        return redirect(url("backend/posts"));
    }
    //Create Get
    public function create(){
        //tạo biến $action để đưa vào thuộc tính action của thẻ form (để biết được lúc nào create, lúc nào create)
        $action = url("backend/posts/createPost");
        $datacate = DB::table("category_list")->orderBy("id","desc")->paginate(10);
        //gọi view, truyền dữ liệu ra view
        return view("admin.PostsCreateUpdate",["action"=>$action,"datacate"=>$datacate]);
    }
    //Create Post
    public function createPost(){
        $title =request("title");
        $category_id=request("category_id");
        $content =request("content");
        $status =request("status");
        DB::table("post_list")->insert(["title"=>$title,"category_id"=>$category_id,"content"=>$content,"status"=>$status]);
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
