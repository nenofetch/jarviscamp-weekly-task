<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $result = Post::all();
        return view('index', ["posts" => $result]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255|min:3',
            'body' => 'required|max:300|min:10'
        ]);
        $data = [
            "title" => $request->title,
            "body" => $request->body
        ];

        $create = Post::create($data);

        if ($create) {
            return redirect('/');
        }
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('edit', ['post' => $post]);
    }

    public function update($id, Request $request)
    {
        $data = [
            "title" => $request->title,
            "body" => $request->body
        ];

        $updates = Post::find($id)->update($data);
        if ($updates) {
            return redirect('/');
        }
    }

    public function show($id)
    {
        $result = Post::find($id);

        return view('detail', ['post' => $result]);
    }

    public function destroy($id)
    {
        Post::destroy($id);
        return redirect('/');
    }
}
