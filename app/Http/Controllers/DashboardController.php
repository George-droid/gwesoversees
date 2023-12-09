<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    public function addDestinations()
    {
        return view('be.pages.adddestinations');
    }
    public function saveDestinations(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255', // Validation rules for the 'name' field
        ]);

        // Create a new menu instance and save the 'name' to the 'menus' table
        $menu = new Destination();
        $menu->name = $request->input('name');
        $menu->save();

        // Optionally, you can return a response or redirect as needed
        return redirect()->back()->with('success', 'Destination saved successfully');
    }
}
