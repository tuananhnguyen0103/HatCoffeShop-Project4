<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $category = Category::all()
                ->where('categories_is_disable','=',0);
        //dd($category);
        //$data = ["category"=>Category::all()];
        return view('admin.categories.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $category = Category::all();

        return view('admin.categories.create', compact('category'));
    }
    public function renametoSlug(){
       // $category = ;
        //dd($category);
        for ($i=1; $i <= Category::all()->count(); $i++) {
            $category = Category::where('id','=',$i)->get();
            $categoryname = $category[0]->categories_name;
            // $categoryName = $category->categories_name;/
            $categoryname = Str::slug($categoryname,'-');
            Category::where('id','=',$i)->update([
                 'categories_slug'=>$categoryname
            ]);
        }
        // Category::where('id','=',$request->id)
        //         ->update([
        //             'categories_name' =>$request->categories_name,
        //             'categories_description' =>$request->categories_desc,
        //             'categories_parent_node' =>$request->categories_id,
        //         ]);

    }
    public function doCreate(Request $request)
    {

        $request->validate([
            'categories_name'=>'required',
        ]);

        if(!$request->image){
            $category_slug = Str::slug($request->categories_name,'-');
            $query=Category::insert(
                [
                   'categories_name' =>$request->categories_name,
                   'categories_description' =>$request->categories_desc,
                   'categories_slug' =>$category_slug,
                   'categories_parent_node' =>$request->categories_id,
                ]
            );
            // return view('admin.categories.index');
        }
        else{

            $category_slug = Str::slug($request->categories_name,'-');
            $imageName = $request->file('image')->getClientOriginalName();
            $request->image->move(public_path('uploads/image/categories'), time().'_'.$imageName);
            $imageName =  'uploads/image/categories/'.time().'_'.$imageName;
                    // dd($imageName);
                    $query=Category::insert(
                        [
                           'categories_name' =>$request->categories_name,
                           'categories_description' =>$request->categories_desc,
                           'categories_images'=>$imageName,
                           'categories_slug' =>$category_slug,
                           'categories_parent_node' =>$request->categories_id,
                        ]
                    );


        }
        $category = Category::all();
        return view('admin.categories.create', compact('category'));
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
        $categoryValue = Category::where('id','=',$id)
                                ->get();
        $categoryParent = Category::all()
                ->where('categories_is_disable','=',0);
        $category = $categoryValue[0];
        // dd($category);
        return view('admin.categories.update', compact('category','categoryParent'));
    }

    public function doUpdate(Request $request){
        // $fileName = time().'_'.$request->avt->getClientOriginalName();
        if(!$request->image){
            Category::where('id','=',$request->id)
                ->update([
                    'categories_name' =>$request->categories_name,
                    'categories_description' =>$request->categories_desc,
                    'categories_parent_node' =>$request->categories_id,
                ]);
            // return view('admin.categories.index');
        }
        else{
            $imageName = $request->file('image')->getClientOriginalName();
            $request->image->move(public_path('uploads/image/categories'), time().'_'.$imageName);
            $imageName =  'uploads/image/categories/'.time().'_'.$imageName;
            Category::where('id','=',$request->id)
                    ->update([
                        'categories_name' =>$request->categories_name,
                        'categories_description' =>$request->categories_desc,
                        'categories_images'=>$imageName,
                        'categories_parent_node' =>$request->categories_id,
                    ]);
        }
        // dd($request);
        // return $request;
        // $imageName = $request->file('image')->getClientOriginalName();
        // $request->image->move(public_path('uploads/image/categories'), $imageName);
        // $imageName = 'uploads/image/categories/'.$imageName;
        // Category::where('id','=',$request->id)
        //         ->update([
        //             'categories_name' =>$request->categories_name,
        //             'categories_description' =>$request->categories_desc,
        //             'categories_images'=>$imageName,
        //             'categories_parent_node' =>$request->categories_id,
        //         ]);

        //  $category = Category::all();
        // return redirect('/admin.shop/category');

        // return view('admin.categories.create', compact('category'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function softDelete(Request $request)
    {
        // dd($request);
        Category::where('id','=',$request->id)
                ->update(['categories_is_disable'=>1]);

        // //dd($category);
        // //$data = ["category"=>Category::all()];
        // return view('admin.categories.index', compact('category'));
    }
    public function destroy($id)
    {
        //
    }
}
