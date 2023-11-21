<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nich;
use illuminate\Support\Str;
class NichController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $niche = Nich::all();
        return view ('backend.niche.niche_list',compact('niche'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.niche.add_niche');
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
        $niche = Nich::where('title', $request->title)->first();
        if ($niche == NULL) {
            $niche = new Nich;
            $niche->title = $request->title;
            $niche->slug = str::slug($request->title);
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
        $id = decrypt($id);
        $niche = Nich::findOrfail($id);
     
        return view('backend.niche.edit_niche', compact('niche'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $niche = Nich::find($id);
        $niche->title = $request->title;
        $niche->slug = str::slug($request->title);
     
        $niche->status = $request->status;
        $niche->save();

        return redirect()->route('niches.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
