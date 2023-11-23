<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;
use illuminate\Support\Str;
class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $packages = Package::all();
        return view ('backend.package.package_list',compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.package.add_package');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'price' => 'required',
            'description' => 'required',
            'status' => 'required',
        ]);
        $niche = Package::where('title', $request->title)->first();
        if ($niche == NULL) {
            $niche = new Package;
            $niche->title = $request->title;
            $niche->slug = str::slug($request->title);
            $niche->price = $request->price;
            $niche->description = $request->description;
            $niche->status = $request->status;
            $niche->save();
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
