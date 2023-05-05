<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;


class PostsftController extends Controller
{
    //Create Get
    public function create(){
        //tạo biến $action để đưa vào thuộc tính action của thẻ form (để biết được lúc nào create, lúc nào create)
        $action = url("frontend/posts/createPost");
        $datacate = DB::table("category_list")->orderBy("id","desc")->paginate(10);
        //gọi view, truyền dữ liệu ra view
        return view("frontend.Question",["action"=>$action,"datacate"=>$datacate]);
    }
    //Create Post
    public function createPost(){
        $title =request("title");
        $category_id=request("category_id");
        $content =request("content");
        $status =request("status");
        DB::table("post_list")->insert(["title"=>$title,"category_id"=>$category_id,"content"=>$content,"status"=>$status]);
        return redirect(url("frontend/home"));
    }
    //Delete
}
