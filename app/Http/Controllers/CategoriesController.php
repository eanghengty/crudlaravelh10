<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Post;
class CategoriesController extends Controller
{
    public function show($id){

        $category = Category::findOrFail($id);
        // dd($category);
        return view('layouts.show')->with('category',$category);
    }
    public function index(){
        $post=Post::all();
        
        return view('layouts.index')->with('post',$post);
    }
    public function destroy($id){

        $post = Post::findOrFail($id);

        $post->delete();
        // dd($post);
        return view('layouts.show');

    }
    public function create(){
        return view('layouts.create');
    }
    public function store(){
        
         $post=new Post();
         $post->title= request('title');
         $post->description=request('description');
         $post->category_id=request('category_id');
        

        
         $post->save();
         return redirect('/');
     }
         
}
