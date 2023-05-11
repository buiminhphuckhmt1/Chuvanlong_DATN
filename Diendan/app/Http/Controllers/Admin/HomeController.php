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
        $count_post_view=DB::table('post_list')->sum('view_count');
        $count_user=DB::table('users')->count();
        $count_tag=Category::get();
        $count_post=Post::count();
        $count_post_type=Post::where('status','=','1')->count();
        $count_cmt=Comments::count();
        $date = Carbon::now()->subDays(7);
        $post_date = Post::where('date_created', '>=', $date)->count();
        $post_week = Post::where('date_created', '>=', $date)->get();
        $test=array(1,2,3,4,5,6,7,8);
        //dd($test);
        return view("admin.Home",["test"=>$test,"count_post_type"=>$count_post_type,"count_tag"=>$count_tag,"post_date"=>$post_date,"count_cmt"=>$count_cmt,"count_user"=>$count_user,"count_post_view"=>$count_post_view,"count_post"=>$count_post] );
    }
    public function dashboard_postweek(Request $request){
        $data=$request->all();
        $sub7days= Carbon::now('Asia/Ho_Chi_Minh')->subdays(7)->toDateString();
        $now=Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
        $get= Statistic::WhereBetween('post_list',[$sub7days,$now])->orderBy('date_created','asc')->get();
        foreach($get as $key =>$val){
            $chart_data[]=array(
                'category_id'=>$val->category_id,
                'user_id'=>$val-user_id,
                'title'=>$val->title,
                'date_created'=>$val->date_created
            );
        }
        echo $data= json_encode($chart_data);

    }
}
