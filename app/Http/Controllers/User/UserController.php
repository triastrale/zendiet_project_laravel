<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home()
    {
        // Mengambil semua post
        $posts = Post::all();

        // Mengirim data post ke view
        return view('home.homepage', ['post' => $posts]);
    }
}
