<?php

namespace App\Http\Controllers\Backend;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonial_list = Testimonial::latest()->get();
        return view('backend.testimonial.index',compact('testimonial_list'), ['page_title' => 'Testimonial']);
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
            'description'   => 'required',
        ]);

        $testimonial = new Testimonial;
        $testimonial->name = $request->name;
        $testimonial->description = $request->description;
        if($request->image){
            $file_photo = time().'-'.rand(111, 990).'.'.$request->image->extension();
            $request->image->storeAs('testimonial', $file_photo, 'public');
            $testimonial->image = $file_photo;
        }

        $testimonial->save();
        return redirect()->route('admin.testimonial.index')->with('success', 'Testimonial added successfully.');
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
        $edit_data = Testimonial::findOrFail($id);
        $testimonial_list = Testimonial::latest()->get();
        return view('backend.testimonial.index', compact('edit_data', 'testimonial_list'), ['page_title' => 'Edit Testimonial']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'          =>  'required',
            'description'   => 'required',
            'image'         =>  'nullable|image|mimes:jpeg,png,jpg',
        ]);

        $testimonial = Testimonial::find($id);
        $testimonial->name = $request->name;
        $testimonial->description = $request->description;
        if($request->image){
            $file_photo = time().'-'.rand(111, 990).'.'.$request->image->extension();
            $request->image->storeAs('testimonial', $file_photo, 'public');
            $testimonial->image = $file_photo;
        }

        $testimonial->save();
        return redirect()->route('admin.testimonial.index')->with('success', 'Testimonial updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $testimonial = Testimonial::find($id);
        $testimonial->delete();
        return redirect()->route('admin.testimonial.index')->with('success', 'Testimonial deleted successfully.');
    }
}
