<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Nich;
use App\Models\Type;
use App\Models\Budget;
use App\Models\Enquiry;
use App\Models\template;
use App\Models\Package;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
 
        $categories = category::where('status', 1)->get();
        $niches = Nich::where('status', 1)->get();
        $types = Type::where('status', 1)->get();
        $budgets = Budget::where('status', 1)->get();
        $templates = template::where('status', 1)->get();
        $packages = Package::where('status', 1)->get();
        return view('frontend.welcome', compact('categories', 'budgets', 'niches', 'types', 'templates', 'packages'));
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
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'category' => 'required',
            'niche' => 'required',
            'type' => 'required',
            'budget' => 'required',
        ]);
        Enquiry::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'category' => $request->category,
            'niche' => $request->niche,
            'type' => $request->type,
            'budget' => $request->budget,
            'status' => $request->status
        ]);

        return redirect('/')->with('success', 'Request successfully update');
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


    function todetailindex($slug)
    {

        $categories = category::where('status', 1)->get();
        $niches = Nich::where('status', 1)->get();
        $types = Type::where('status', 1)->get();
        $budgets = Budget::where('status', 1)->get();


        $detail = template::where('slug', $slug)->first();

        return view('frontend.detail_page', compact('detail', 'categories', 'budgets', 'niches', 'types'));
    }


    function topackage()
    {
        $packages = Package::all();
        return view('frontend.packages', compact('packages'));
    }

    
}
