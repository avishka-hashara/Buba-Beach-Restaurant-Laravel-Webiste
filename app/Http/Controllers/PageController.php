<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category; // Don't forget to import the model!

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function menu()
    {
        // Fetch active categories and eagerly load their available menu items
        $categories = Category::with(['menuItems' => function ($query) {
            $query->where('is_available', true);
        }])->where('is_active', true)->get();

        return view('menu', compact('categories'));
    }

    public function contact() 
    { 
        return view('contact'); 
    }
}