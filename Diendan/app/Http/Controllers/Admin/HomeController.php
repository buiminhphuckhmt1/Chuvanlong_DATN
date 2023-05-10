<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;


class HomeController extends Controller
{
    public function index(){
        $count_post=DB::table('post_list')->count();
        $count_user=DB::table('users')->count();
        $count_php=DB::table('post_list')->where('category_id',"=", '2')->count();
        $count_javascrip=DB::table('users')->count();
        $count_python=DB::table('users')->count();
        $count_net=DB::table('users')->count();
        $count_jquery=DB::table('users')->count();
        $count_android=DB::table('users')->count();
        $count_ios=DB::table('users')->count();
        return view("admin.Home",["count_user"=>$count_php,"count_php"=>$count_user,"count_post"=>$count_post] );
    }
}
