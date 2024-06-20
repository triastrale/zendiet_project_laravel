<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Food;
use Illuminate\Http\Request;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function posts()
    {
        $post = Post::all();

        return view('admin.posts', compact('post'));
    }

    public function categories()
    {
        $food = Food::all();
        return view('admin.categories', compact('food'));
    }

    public function users()
    {
        return view('admin.users');
    }
    public function profile()
    {
        return view('admin.profile');
    }
    public function add_post(Request $request)
    {

        $user = Auth::user();

        $userid = $user->id;
        $name = $user->name;
        $usertype = $user->usertype;

        $post = new Post;

        $post->title = $request->title;
        $post->description = $request->body;
        $post->post_status = 'active';
        $post->user_id = $userid;
        $post->name = $name;
        $post->usertype = $usertype;

        $image = $request->image;

        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();

            $request->image->move('postimage', $imagename);

            $post->image = $imagename;
        }

        $post->save();

        return redirect()->back()->with('message', 'Post Added Successfully');
    }

    public function show_post()
    {
        $post = Post::all();
        return view('admin.show_post', compact('post'));
    }

    public function delete_post($id)
    {
        $post = Post::find($id);

        if ($post) {
            $post->delete();
            return redirect()->back()->with('message', 'Post Deleted Successfully');
        } else {
            return redirect()->back()->with('error', 'Post Not Found');
        }
    }

    public function edit_page($id)
    {
        $post = Post::find($id);

        return view('admin.edit_page', compact('post'));
    }

    public function update_post(Request $request, $id)
    {
        $data = Post::find($id);
        $data->title = $request->input('title');
        $data->description = $request->input('description');

        $image = $request->image;

        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('postimage', $imagename);
            $data->image = $imagename;
        }

        $data->save();
        return redirect()->back()->with('message', 'Post Updated Successfully');
    }

    public function add_food(Request $request)
    {
        $food = new Food;

        $food->name = $request->name;
        $food->categories = $request->categories;
        $food->serving = $request->serving;
        $food->calories = $request->calories;
        $food->save();
        return redirect()->back();
    }
    public function show_food()
    {
        $food = Food::all();
        return view('admin.show_food', compact('food'));
    }

    public function delete_food($id)
    {
        $food = Food::find($id);

        if ($food) {
            $food->delete();
            return redirect()->back()->with('message', 'Food Deleted Successfully');
        } else {
            return redirect()->back()->with('error', 'Food Not Found');
        }
    }

    public function edit_food($id)
    {
        $food = Food::find($id);

        return view('admin.edit_food', compact('food'));
    }

    public function update_food(Request $request, $id)
    {
        $foodie = Food::find($id);
        $foodie->name = $request->input('name');
        $foodie->categories = $request->input('categories');
        $foodie->serving = $request->input('serving');
        $foodie->calories = $request->input('calories');

        $foodie->save();
        return redirect()->back()->with('message', 'Post Updated Successfully');
    }
}
