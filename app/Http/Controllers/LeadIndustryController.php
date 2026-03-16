<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LeadIndustry;

class LeadIndustryController extends Controller
{
    // 1️⃣ Display all data
    public function index()
    {
        $leadIndustries = LeadIndustry::all();
        return view('leadindustry.index', compact('leadIndustries'));
    }

    // 2️⃣ Show create form
    public function create()
    {
        return view('leadindustry.create');
    }

    // 3️⃣ Store new data
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'additional_nodes' => 'required'
        ]);

        LeadIndustry::create([
            'name' => $request->name,
            'additional_nodes' => $request->additional_nodes
        ]);

        return redirect()->route('leadindustry.index');
    }

    // 4️⃣ Show edit form
   
public function edit(LeadIndustry $leadIndustry)
{
    return view('leadindustry.edit', compact('leadIndustry'));
}

    // 5️⃣ Update data
public function update(Request $request, LeadIndustry $leadIndustry)
{
    $leadIndustry->update($request->all());
    return redirect()->route('leadindustry.index');
}

    // 6️⃣ Delete data
    public function destroy(LeadIndustry $leadIndustry)
    {
        $leadIndustry->delete();
        return redirect()->route('leadindustry.index');
    }
}