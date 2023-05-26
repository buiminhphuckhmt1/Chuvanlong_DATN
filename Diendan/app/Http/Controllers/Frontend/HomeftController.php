<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use App\Models\Comments;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Visit;
use DB;


class HomeftController extends Controller
{
    public function index(){
        $user_ip_address= request()->ip();
        $data = Post::where("status","=","1")->paginate(10);
        $datacate = DB::table("category_list")->orderBy("id","desc")->paginate(5);
        Visit::insert(["ip_address"=>$user_ip_address]);
        return view("frontend.Home",compact('data'),["datacate"=>$datacate]);
    }
    public function home(){
        $user_ip_address= request()->ip();
        $data = Post::where("status","=","1")->paginate(10);
        $datacate = DB::table("category_list")->orderBy("id","desc")->paginate(5);
        return view("frontend.Home",compact('data'),["datacate"=>$datacate]);
    }
    public function fitterold(){
        $data = Post::where("status","=","1")->orderBy("date_created","asc")->paginate(10);
        $datacate = DB::table("category_list")->orderBy("id","desc")->paginate(5);
        return view("frontend.Home",["data"=>$data,"datacate"=>$datacate]);
    }
    public function fitternew(){
        $data = Post::where("status","=","1")->orderBy("date_created","desc")->paginate(10);
        $datacate = DB::table("category_list")->orderBy("id","desc")->paginate(5);
        return view("frontend.Home",["data"=>$data,"datacate"=>$datacate]);
    }
    public function follow(){
        $data = Post::where("follow","=",1)->orderBy("id","desc")->paginate(10);
        $datacate = DB::table("category_list")->orderBy("id","desc")->paginate(5);
        return view("frontend.Home",["data"=>$data,"datacate"=>$datacate]);
    }
    public function tag($id){
        $data = Post::where("status","=","1")->where("category_id","=",$id)->orderBy("category_id","desc")->paginate(10);
        $datacate = DB::table("category_list")->orderBy("id","desc")->paginate(5);
        return view("frontend.Home",["data"=>$data,"datacate"=>$datacate]);
    }
    public function topview(){
        $data = Post::where("status","=","1")->orderBy('view_count', 'DESC')->paginate(10);
        $datacate = DB::table("category_list")->orderBy("id","desc")->paginate(5);
        return view("frontend.Home",["data"=>$data,"datacate"=>$datacate]);
    }
    public function viewquestion($id){
        $post = Post::where('id', $id)->first();
        $post->increment('view_count');
        $datacate = DB::table("category_list")->orderBy("id","desc")->paginate(5);
        $relate = Post::where('category_id', $post->category_id)->take(2)->inRandomOrder()->get();

        $comments = Comments::where("post_id", $post->id)->paginate(10);
        $action = url("frontend/comment/$id");

        return view('frontend.Questiondetail', compact('post', 'relate', 'comments','datacate'));
    }
    public function alltag(){
        $post = Category::where("status","=","1")->get();
        $datacate = DB::table("category_list")->orderBy("id","desc")->paginate(5);
        $date = Carbon::now();
        $post_date = Post::where('date_created', '>=', $date)->count();
        return view('frontend.Tag', compact('post','datacate','post_date'));
    }
    public function search(){
        $key_search=request("key_search");
        $data = Post::where("status","=",1)->where('title','like','%' .$key_search. '%')->paginate(10);
        $countdata = Post::where("status","=",1)->where('title','like','%' .$key_search. '%')->count();
        $datacate = DB::table("category_list")->orderBy("id","desc")->paginate(5);
        return view("frontend.Searchtitle",["data"=>$data,"datacate"=>$datacate,"countdata"=>$countdata,"key_search"=>$key_search]);
    }
    public function comment($id)
    {
        $user_id=Auth::id();
        $comment =request("comment");
        $post_id=$id;
        DB::table("comment_list")->insert(["comment"=>$comment,"user_id"=>$user_id,"post_id"=>$post_id]);
        return redirect(url("frontend/question/$id"));
    }
    public function deletecmt($id){
        //delete bản ghi
        $id_p=Comments::where('id',$id)->first();
        DB::table("comment_list")->where("id","=",$id)->delete();
        //di chuyển đến url khác
        return redirect(url("frontend/question/$id_p->post_id"));
    }
}

