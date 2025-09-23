<?php

namespace App\Http\Controllers\Backend;

use App\Models\DietType;
use App\Models\FoodMenu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FoodMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $food_list = FoodMenu::with('getDiet')->latest()->get();
        return view('backend.food_menu.index',compact('food_list'), [
            'page_title'    => 'Healthy Food Online in Bangalore | Rasamrit Weekly Food Menu',
            'description'   => '  Explore Rasamrit’s healthy food Bangalore online menu. Find delicious vegetarian, low-carb, keto, and balanced meals available for home delivery. 
            Subscribe now for fresh, organic food boxes every week!',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $diet_type_list = DietType::latest()->get();
        return view('backend.food_menu.create',compact('diet_type_list'), ['page_title' => 'Add Food Menu']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'diet_type'     =>  'required',
            'dietary'       =>  'required',
        ]);

        $diet = FoodMenu::where('diet_type', $request->diet_type)->where('dietary', $request->dietary)->first();
        if($diet){
            return redirect()->back()->with('error', 'This diet type and dietary already exists.');
        }

        $food = new FoodMenu;
        $food->diet_type = $request->diet_type;
        $food->dietary = $request->dietary;
        $food->menu = [
           'breakfast'  => $request->breakfast,
           'lunch'      => $request->lunch,
           'snack'      => $request->snack,
           'dinner'     => $request->dinner
        ];

        $food->save();
        return redirect()->route('admin.food-menu.index')->with('success', 'Food menu added successfully.');
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
        $food_data = FoodMenu::findOrFail($id);
        $diet_type_list = DietType::latest()->get();
        return view('backend.food_menu.edit',compact('food_data', 'diet_type_list'), ['page_title' => 'Edit Food Menu']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'diet_type'     =>  'required',
            'dietary'       =>  'required',
        ]);

        $diet = FoodMenu::where('id', '!=', $id)->where('diet_type', $request->diet_type)->where('dietary', $request->dietary)->first();

        if($diet){
            return redirect()->back()->with('error', 'This diet type and dietary already exists.');
        }

        $food = FoodMenu::findOrFail($id);
        $food->diet_type = $request->diet_type;
        $food->dietary = $request->dietary;
        $food->menu = [
           'breakfast'  => $request->breakfast,
           'lunch'      => $request->lunch,
           'snack'      => $request->snack,
           'dinner'     => $request->dinner
        ];

        $food->save();
        return redirect()->route('admin.food-menu.index')->with('success', 'Food menu updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $food = FoodMenu::findOrFail($id);
        $food->delete();
        return redirect()->route('admin.food-menu.index')->with('success', 'Food menu deleted successfully.');
    }
}
