<?php

namespace App\Http\Controllers\Admin;
use App\Models\Category;
use App\Models\Comments;
use App\Models\Post;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;


class HomeController extends Controller
{
    public function index(){
        $date = Carbon::now()->subDays(7);
        $count_post_view=DB::table('post_list')->sum('view_count');
        $count_user=DB::table('users')->count();
        $count_tag=Category::get();
        $count_tag1=Category::select('id','name',)->where('date_updated', '>=', $date)->get();
        $count_post=Post::count();
        $count_post_type=Post::where('status','=','1')->count();
        $count_cmt=Comments::count();
        $post_date = Post::where('date_updated', '>=', $date)->count();
        $post_week = Post::where('date_updated', '>=', $date)->get();
        $result =Category::select('name')->get();
        $datalbca = [];
        $datadtca=[];
 
        foreach($count_tag1 as $row) {
            $datalbca[] = $row->name;
            $datadtca[] = (int) $row->posts->count();
        }
        $percenca=($count_tag1->count()/$count_post)*100;
        return view("admin.Home",compact('datalbca','datadtca','percenca'),["count_post_type"=>$count_post_type,"count_tag"=>$count_tag,"post_date"=>$post_date,"count_cmt"=>$count_cmt,"count_user"=>$count_user,"count_post_view"=>$count_post_view,"count_post"=>$count_post] );
    }
    // public function dashboard_post(Request $request){

    // }
    // public function dashboard_get(Request $request){
    //     $result =Category::limit(4)->select('name')->get();
    //     $data = [];
 
    //     foreach($result as $row) {
    //         $data['label'][] = $row->name;
    //         //$data['data'][] = (int) $row->post->count;
    //     }
 
    //     $data['chart_data'] = json_encode($data);
    //     return view('admin.Home', $data);
    // }
}
