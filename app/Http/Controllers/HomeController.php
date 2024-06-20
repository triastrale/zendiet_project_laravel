<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Auth;

use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::id()) {

            $usertype = Auth()->user()->usertype;

            if ($usertype == 'user') {
                return view('home.homepage');
            } else if ($usertype == 'admin') {
                return view('admin.dashboard');
            } else {
                return redirect()->back();
            }
        }
    }

    public function homepage()
    {
        $posts = Post::latest()->take(3)->get();
        return view('home.homepage', compact('posts'));
    }


    public function post_details($id)
    {

        $post = Post::find($id);

        return view('home.post_details', compact('post'));
    }
}
