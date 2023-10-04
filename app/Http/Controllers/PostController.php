<?php

namespace App\Http\Controllers;

use App\Models\Posting;
use App\Models\Category;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        $categories=Category::all();
        return view ('artikel', [
            "title" => "Artikel",
            "artikel"=> Posting::latest()->filter(request(['search']))->paginate(4)->withQueryString(),
            "categories"=>$categories
        ]);
        
    }

    public function show(Posting $post)
    {
        $categories=Category::all();
        return view('singlepost', ["title" => "Single Post",
            "post" => $post,
            "categories"=>$categories
        ]);
    }

    public function categorypost(Category $category)
    {
        $categories=Category::all();
        return view('/category', [
            'title' => $category->name,
            'posts' => $category->posts,
            'category' => $category->name,
            "categories"=>$categories
        ]);
    }
}
