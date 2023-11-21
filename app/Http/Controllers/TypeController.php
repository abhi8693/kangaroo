<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type;
use illuminate\Support\Str;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
 $types = Type::all();
   return view ('backend.types.type_list',compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.types.add_type');
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
        $type = Type::where('title', $request->title)->first();
        if ($type == NULL) {
            $type = new Type;
            $type->title = $request->title;
            $type->slug = str::slug($request->title);
            $type->status = $request->status;
            $type->save();
            session()->flash('success', ' Added successfully!');
            return redirect()->back();
        }
        session()->flash('error', ' already exist');
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
        $types = Type::findOrfail($id);
     
        return view('backend.types.edit_type', compact('types'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Type $type)
    {
        $type = Type::find($request->id);
        $type->title = $request->title;
        $type->slug = str::slug($request->title);
     
        $type->status = $request->status;
        $type->save();

        return redirect()->route('types.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
