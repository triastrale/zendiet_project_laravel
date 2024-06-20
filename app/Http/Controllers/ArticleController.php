<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Auth;

use App\Models\Post;

class ArticleController extends Controller
{
    public function showPosts()
    {
        $posts = Post::all();
        return view('article.post', compact('posts'));
    }
}
