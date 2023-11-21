<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Budget;
class BudgetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $budgets = Budget::all();
        return view ('backend.budget.budget_list',compact('budgets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.budget.add_budget');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'price' => 'required',
            'status' => 'required',
        ]);
        $budget = budget::where('price', $request->price)->first();
        if ($budget == NULL) {
            $budget = new budget;
            $budget->price = $request->price;
            $budget->status = $request->status;
            $budget->save();
            session()->flash('success', ' added successfully!');
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
        $budget = Budget::findOrfail($id);
     
        return view('backend.budget.edit_budget', compact('budget'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $budget = Budget::find($id);
        $budget->price = $request->price;
     
        $budget->status = $request->status;
        $budget->save();

        return redirect()->route('budgets.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
