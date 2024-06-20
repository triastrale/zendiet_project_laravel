<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Auth;

use App\Models\Post;

use App\Models\Food;

class FoodController extends Controller
{    
    public function showFruitsAndVeggies()
    {
        $food = Food::where('categories', 'Fruit and Vegetables')->orderBy('name', 'asc')->get();
        return view('categories.fnv', compact('food'));
    }
    public function showMilkAndDairy()
    {
        $food = Food::where('categories', 'Milk and Dairy Products')->orderBy('name', 'asc')->get();
        return view('categories.mdp', compact('food'));
    }
    public function showMeat()
    {
        $food = Food::where('categories', 'Meat')->orderBy('name', 'asc')->get();
        return view('categories.meat', compact('food'));
    }
}
