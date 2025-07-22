<?php

namespace App\Http\Controllers\Backend;

use App\Models\Goal;
use App\Models\DietType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DietTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $diet_list = DietType::latest()->get();
        $goal_list = Goal::latest()->get();
        return view('backend.diet_type.index',compact('diet_list', 'goal_list'), ['page_title' => 'Diet Type']);
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
            'name'     =>  'required',
            'goal'     =>  'required|array',
        ]);

        $diet = new DietType;
        $diet->goal = $request->goal;
        $diet->name = $request->name;

        $diet->save();
        return redirect()->route('admin.diet-type.index')->with('success', 'Diet type added successfully.');
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
        $edit_data = DietType::findOrFail($id);
        $diet_list = DietType::latest()->get();
        $goal_list = Goal::latest()->get();
        return view('backend.diet_type.index', compact('edit_data', 'diet_list', 'goal_list'), ['page_title' => 'Edit Diet Type']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'     =>  'required',
            'goal'     =>  'required|array',
        ]);

        $diet = DietType::findOrFail($id);
        $diet->goal = $request->goal;
        $diet->name = $request->name;

        $diet->save();
        return redirect()->route('admin.diet-type.index')->with('success', 'Diet type updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $diet = DietType::find($id);
        $diet->delete();
        return redirect()->route('admin.diet-type.index')->with('success', 'Diet type deleted successfully.');
    }
}
