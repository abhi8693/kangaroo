<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('backend.category.category_list', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.category.add_category');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'status' => 'required',
        ]);
        $category = Category::where('title', $request->title)->first();
        if ($category == NULL) {
            $category = new Category;
            $category->title = $request->title;
            $category->slug = str::slug($request->title);
            $category->status = $request->status;
            $category->save();
            session()->flash('success', 'Category added successfully!');
            return redirect()->back();
        }
        session()->flash('error', 'category already exist');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $id = decrypt($id);
        $categories = Category::findOrfail($id);
     
        return view('backend.category.edit_category', compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $category = category::find($request->id);
        $category->title = $request->title;
        $category->slug = str::slug($request->title);
     
        $category->status = $request->status;
        $category->save();

        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // $subcagtegories = Subcategory::where('category', $id)->get();
        // if (count($subcagtegories) == 0) {
        // Category::whereId($id)->delete();
        // }
        // return redirect()->route('categories.index');
    }
}
