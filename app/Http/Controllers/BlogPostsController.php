<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogPostsController extends Controller
{
    public function blogposts(){
        //
        return view('admin.pages.posts');
    }
}
