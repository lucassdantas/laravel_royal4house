<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function index(){
      $blogPosts = DB::table('blog_posts')->select('*')->where('blog_posts.published_at', '<=', Carbon::now())->get();
      $blogCategories = DB::table('blog_categories')->select('*')->get();
      $blogTags = DB::table('blog_tags')->select('*')->get();

      return view('blog', ['blogPosts'=>$blogPosts, 'blogCategories'=>$blogCategories, 'blogTags'=>$blogTags]);
    }
}
