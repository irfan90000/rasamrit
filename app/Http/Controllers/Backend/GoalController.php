<?php

namespace App\Http\Controllers\Backend;

use App\Models\Goal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GoalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $goal_list = Goal::latest()->get();
        return view('backend.goal.index',compact('goal_list'), ['page_title' => 'Goals']);
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
            'name'          =>  'required',
            'image'         =>  'required|image|mimes:jpeg,png,jpg',
        ]);

        $goal = new Goal;
        $goal->name = $request->name;
        if($request->image){
            $file_photo = time().'-'.rand(111, 990).'.'.$request->image->extension();
            $request->image->storeAs('goal', $file_photo, 'public');
            $goal->image = $file_photo;
        }

        $goal->save();
        return redirect()->route('admin.goal.index')->with('success', 'Goal added successfully.');
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
        $edit_data = Goal::findOrFail($id);
        $goal_list = Goal::latest()->get();
        return view('backend.goal.index', compact('edit_data', 'goal_list'), ['page_title' => 'Edit Goal']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'          =>  'required',
            'image'         =>  'nullable|image|mimes:jpeg,png,jpg',
        ]);

        $goal = Goal::findOrFail($id);
        $goal->name = $request->name;
        if($request->image){
            $file_photo = time().'-'.rand(111, 990).'.'.$request->image->extension();
            $request->image->storeAs('goal', $file_photo, 'public');
            $goal->image = $file_photo;
        }

        $goal->save();
        return redirect()->route('admin.goal.index')->with('success', 'Goal updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $goal = Goal::find($id);
        $goal->delete();
        return redirect()->route('admin.goal.index')->with('success', 'Goal deleted successfully.');
    }
}
