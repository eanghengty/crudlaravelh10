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
        $post=Post::paginate(10);
        
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
     public function update(Request $req){
        $update=Post::findOrFail($req->id);
        // $update = Post::findOrFail($id);

        // $update->title=request('title');
        // $update->description=request('description');
        $update->title=$req->title;
        $update->description=$req->description;

        $update->save();
        // dd($update);
    return  redirect('/');

    
}
public function showUpdate($id){
        $data = Post::find($id);
        return view('layouts.update',['data'=>$data]);
    }

         
}
