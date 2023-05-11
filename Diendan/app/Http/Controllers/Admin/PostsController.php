<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comments;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $action = url("backend/posts/createPost");
        $datacate = DB::table("category_list")->orderBy("id","asc")->get();
        // //gọi view, truyền dữ liệu ra view
        // return view("admin.PostsRead",["data"=>$data,"action"=>$action]);
        $posts = Post::paginate(20);

        return view('admin.PostsRead', compact('posts'),["action"=>$action,"datacate"=>$datacate]);
    }
    public function view($id){
        $dataview = Post::where('id', $id)->first();
        $comments = Comments::where("post_id", $dataview->id)->paginate(10);
        //gọi view, truyền dữ liệu ra view
        return view("admin.PostsView",["dataview"=>$dataview,"comments"=>$comments]);
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
        $description =request("description");
        $user_id=Auth::id();
        $category_id =request("category_id");
        $content =request("content");
        $status =request("status");
        //update name
        DB::table("post_list")->where("id","=",$id)->update(["title"=>$title,"user_id"=>$user_id,"description"=>$description,"category_id"=>$category_id,"content"=>$content,"status"=>$status]);
        return redirect(url("backend/posts/?notify=update-success"));
    }
    //Create Get
    public function create(){
        //tạo biến $action để đưa vào thuộc tính action của thẻ form (để biết được lúc nào create, lúc nào create)
        $action = url("backend/posts/createPost");
        $datacate = DB::table("category_list")->orderBy("id","asc");
        //gọi view, truyền dữ liệu ra view
        return view("admin.PostsCreateUpdate",["action"=>$action,"datacate"=>$datacate]);
    }
    //Create Post
    public function createPost(){
        $user_id=Auth::id();
        $title =request("title");
        $category_id=request("category_id");
        $description =request("description");
        $content =request("content");
        $status =request("status");
        DB::table("post_list")->insert(["title"=>$title,"user_id"=>$user_id,"description"=>$description,"category_id"=>$category_id,"content"=>$content,"status"=>$status]);
        return redirect(url("backend/posts/?notify=creat-success"));
    }
    //Delete
    public function delete($id){
        //delete bản ghi
        DB::table("post_list")->where("id","=",$id)->delete();
        //di chuyển đến url khác
        return redirect(url("backend/posts/?notify=delete-success"));
    }
    public function deletecmt($id){
        //delete bản ghi
        $id_p=Comments::where('id',$id)->first();
        DB::table("comment_list")->where("id","=",$id)->delete();
        //di chuyển đến url khác
        return redirect(url("backend/posts/view/$id_p->post_id"));
    }
}
