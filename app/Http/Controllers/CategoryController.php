<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
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
        //
        $category = Category::all();
        return view('packages.categories.index')->with('categories',$category);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('packages.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
        //
        $category = new Category();
        $category->name = $request->name;
        $slug = Str::slug($request->name);
        $category->featured_image = $request->featured_image;
        $category->slug = $slug;
        
         if($category->save()){
            return  redirect('category')->with('success', 'Successfully added category.');

         }else{
            return back()->with('error','Error while adding category.');
         }

    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($category)
    {
        //
        $usercategory = Category::find($category);
        return response([
            'data' => $usercategory,
            'status' => 200,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryRequest  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryRequest $request)
    {
        //
        // dd($request->catid);
        $id = $request->catid;
        $category  = Category::find($id);

        $category->name = $request->name;
        $category->slug = $request->catslug1;

        if($category->update()){
          return redirect('category')->with('success', 'Category has been updated successfully.'); 
         }else{
            return redirect('category')->with('error',' Category already exists.');
        }

      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($category)
    {
        //
        $category = Category::find($category);

        $category->delete();

        @session()->flash('success', 'Category has been Deleted successfully!');
       return redirect('category');
    }




    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function showCategory(Category $category)
    {
        //
        // $usercategory = Category::find($category)->get;
        // return $category;
    }
}
