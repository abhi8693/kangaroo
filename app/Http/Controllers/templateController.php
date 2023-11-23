<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\template;
use illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class templateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $templates = template::all();
        return view('backend.templates.template_list', compact('templates'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('backend.templates.add_template', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required',
            'title' => 'required',
            'status' => 'required',
        ]);
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('assets/img'), $imageName);
        $template = new template;
        $template->category_id = $request->category;
        $template->title = $request->title;
        $template->slug = str::slug($request->title);
        $template->image = $imageName;
        $template->price = $request->price;
        $template->description = $request->description;
        $template->meta_title = $request->meta_t;
        $template->meta_keywords = $request->meta_k;
        $template->meta_description = $request->meta_d;
        $template->status = $request->status;
        $template->save();
        session()->flash('success', 'Template Added successfully!');
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

        $template = template::findOrfail($id);
        $categories = Category::all();

        return view('backend.templates.edit_template', compact('template', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $request->validate([
            'category' => 'required',
            'title' => 'required',
            'image' => 'required',
            'status' => 'required',
        ]);

        $template = template::find($id);
        if (isset($request->image)) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/img'), $imageName);
            $template->image = $imageName;
        }
        $template->category_id = $request->category;
        $template->title = $request->title;
        $template->slug = str::slug($request->title);
        $template->price = $request->price;
        $template->description = $request->description;
        $template->meta_title = $request->meta_t;
        $template->meta_keywords = $request->meta_k;
        $template->meta_description = $request->meta_d;
        $template->status = $request->status;
        $template->save();
        session()->flash('success', 'edit successfully!');
        return redirect()->route('templates.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

 
}
