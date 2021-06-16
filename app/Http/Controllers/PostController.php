<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Session;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::all();
        $post = post::all();
        // dd($session);
        return view('admin.post.index', compact('category','post'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Session $session)
    {
        $category = Category::all();
        // dd($session);
        return view('admin.post.create', compact('category'));
    }
    public function doCreate(Request $request){
        $imageName = $request->file('image')->getClientOriginalName();
        $request->image->move(public_path('uploads/image/posts'), time().'_'.$imageName);
        $imageName =  'uploads/image/posts/'.time().'_'.$imageName;
        $query=post::insert(
            [
               'staff_id' =>Session::get('id'),
               'post_image' =>$imageName,
               'categories_id'=>$request->categories_id,
               'post_content' =>$request->content,
            ]
        );
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
