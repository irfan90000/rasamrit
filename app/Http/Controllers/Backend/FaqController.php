<?php

namespace App\Http\Controllers\Backend;

use App\Models\Faq;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faq_list = Faq::latest()->get();
        return view('backend.faq.index', compact('faq_list'), ['page_title' => 'Faq']);
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
            'title'         =>  'required',
            'description'   => 'required',
        ]);

        $faq = new Faq;
        $faq->title = $request->title;
        $faq->description = $request->description;

        $faq->save();
        return redirect()->route('admin.faq.index')->with('success', 'Faq added successfully.');
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
        $edit_data = Faq::findOrFail($id);
        $faq_list = Faq::latest()->get();
        return view('backend.faq.index', compact('edit_data', 'faq_list'), ['page_title' => 'Edit Faq']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title'         =>  'required',
            'description'   => 'required',
        ]);

        $faq = Faq::findOrFail($id);
        $faq->title = $request->title;
        $faq->description = $request->description;

        $faq->save();
        return redirect()->route('admin.faq.index')->with('success', 'Faq updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $faq = Faq::findOrFail($id);
        $faq->delete();
        return redirect()->route('admin.faq.index')->with('success', 'Faq deleted successfully.');
    }
}
