<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PostController extends Controller
{
    public function create() {
        return view('post.create');
    }

    public function store(Request $request) {
        // dd($request->all());
        $request->validate([
            "title" => "required|unique:posts",
            "body" => "required"
            ]);

        $query = DB::table('posts')->insert([
            "title" => $request["title"],
            "body" => $request["body"]
        ]);

        return redirect('/posts/create');
    }
}
