<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\enquiry;
class enquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $enquiry = enquiry::with('leadmessage')->orderBy('created_at','desc')->get();
        return view('backend.enquiry.enquiry_list', compact('enquiry'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $enquiry = Enquiry::create($request->all());
       $enquiry = Enquiry::create([
        'name'=> $request->name,
        'email'=> $request->email,
        'phone'=> $request->phone,
        'category'=> $request->category,
        'niche'=> $request->niche,
        'type'=> $request->type,
        'budget'=> $request->budget,
        'status'=> $request->status,
 

     
    ]);
    return redirect()->back()->with('success','Request successfully update');
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
