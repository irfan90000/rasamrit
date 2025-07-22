<?php

namespace App\Http\Controllers\Backend;

use App\Models\WebsiteSetup;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WebsiteSetupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.website_setup.index', ['page_title' => 'Website Setup']);
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
        $input = $request->all();
        foreach ($input['type'] as $types){
            if(isset($input[$types])){

                if($types == "banner"){
                    $bannerImage = time().rand(99, 999).'.'.$input[$types]->extension();
                    $input[$types]->storeAs('website_setup', $bannerImage, 'public');
                    $input[$types] = $bannerImage;
                }

                if($types == "logo"){
                    $logoImage = time().rand(99, 999).'.'.$input[$types]->extension();
                    $input[$types]->storeAs('website_setup', $logoImage, 'public');
                    $input[$types] = $logoImage;
                }

                if($types == "favicon"){
                    $faviconImage = time().rand(99, 999).'.'.$input[$types]->extension();
                    $input[$types]->storeAs('website_setup', $faviconImage, 'public');
                    $input[$types] = $faviconImage;
                }

                WebsiteSetup::updateOrCreate(
                    ["name" => $types],
                    [
                        "name" => $types,
                        "value" => $input[$types]
                    ],
                );
            }
        }
        return redirect()->back()->with('success', 'Website Setup updated successfully');
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
