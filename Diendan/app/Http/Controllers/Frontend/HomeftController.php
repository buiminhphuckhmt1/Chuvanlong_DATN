<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use App\Models\Comments;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DB;


class HomeftController extends Controller
{
    public function index(){
        $data = Post::paginate(10);
        $datacate = DB::table("category_list")->orderBy("id","desc")->paginate(10);
        return view("frontend.Home",compact('data'),["datacate"=>$datacate]);
    }
    public function fitterold(){
        $data = Post::orderBy("date_updated","asc")->paginate(10);
        $datacate = DB::table("category_list")->orderBy("id","desc")->paginate(10);
        return view("frontend.Home",["data"=>$data,"datacate"=>$datacate]);
    }
    public function fitternew(){
        $data = Post::orderBy("date_updated","desc")->paginate(10);
        $datacate = DB::table("category_list")->orderBy("id","desc")->paginate(10);
        return view("frontend.Home",["data"=>$data,"datacate"=>$datacate]);
    }
    public function follow(){
        $data = Post::where("follow","=",1)->orderBy("id","desc")->paginate(10);
        $datacate = DB::table("category_list")->orderBy("id","desc")->paginate(10);
        return view("frontend.Home",["data"=>$data,"datacate"=>$datacate]);
    }
    public function tag($id){
        $data = Post::where("category_id","=",$id)->orderBy("category_id","desc")->paginate(10);
        $datacate = DB::table("category_list")->orderBy("id","desc")->paginate(10);
        return view("frontend.Home",["data"=>$data,"datacate"=>$datacate]);
    }
    public function viewquestion($id){
        $post = Post::where('id', $id)->first();
        // $post->update([
        //     'view_count' => $post->view_counts+ 1
        // ]);

        $relate = Post::where('category_id', $post->category_id)->take(2)->inRandomOrder()->get();

        $comments = Comments::where("post_id", $post->id)->paginate(10);

        return view('frontend.Questiondetail', compact('post', 'relate', 'comments'));
    }
    public function comment(Request $request, $id)
    {
        Comment::create([
            'content' => $request->get('content'),
            'user_id' => Auth::id(),
            'post_id' => $id
        ]);
        return redirect()->back();
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

