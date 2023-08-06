<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function create()
    {
        return view('create');
    }
    public function edit($id)
    {
        return view('edit',['id'=>$id]);
    }
    public function delete($id)
    {
        Post::find($id)->delete();
        return redirect()->back();
    }
}
