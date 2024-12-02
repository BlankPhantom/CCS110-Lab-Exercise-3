<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Blogs;
use Illuminate\Support\Facades\Request;

class BlogController extends Controller
{
    public function index() {
        return view("index");
    }

    public function show(Request $request) {
        $keyword = $request->keyword;

        $blogs = Blogs::query()
        ->where('quote', 'like', "%{$keyword}%")
        ->orWhere('author', 'like', "%{$keyword}%")
        ->get();
        return view("result", compact("quotes"));
    }
}
