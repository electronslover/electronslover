<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class PostController extends Controller
{

    public function index()
    {

        return view ('blog.index')
        ->with('posts' , Post::all());
    }


    public function create()
    {

    }


    public function store(Request $request)
    {
       }

     public function show($id)
    {
    }

     public function edit($id)
    {
    }


    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }
}
