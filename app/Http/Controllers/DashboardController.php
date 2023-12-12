<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\University;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
            'image' => 'string',
        ]);

        // Create a new menu instance and save the 'name' to the 'menus' table
        $menu = new Destination();
        $menu->name = $request->input('name');
        $menu->image = $request->input('image');
        $menu->save();

        // Optionally, you can return a response or redirect as needed
        return redirect()->back()->with('success', 'Destination saved successfully');
    }
    public function listDestinations()
    {
        $destinations = Destination::with('universities')->get();
        return view('be.pages.deletedestinations', compact('destinations'));
    }
    public function deleteDestinations($id)
    {
        $menu = Destination::findOrFail($id);
        $menu->delete();

        return redirect()->back()->with('success', 'Destination deleted successfully');
    }

    // Universities
    public function addUniversities()
    {
        $destinations = DB::table('destinations')->get();
        return view('be.pages.adduniversities', compact('destinations'));
    }
    public function saveUniversities(Request $request)
    {
        $request->validate([
            'destination_id' => 'required',
            'name' => 'required|string|max:255',
            'logo' => 'required|string', 
            'description' => 'required|string', 
        ]);

        $newDish = new University();
        $newDish->destination_id = $request->input('destination_id');
        $newDish->name = $request->input('name');
        $newDish->logo = $request->input('logo');
        $newDish->description = $request->input('description');

        $newDish->save();

        // $request->session()->flash('success', 'Dish added successfully');

        return redirect()->back()->with('success', 'University added successfully');
    }
    public function listUniversities()
    {
        $universities = University::with('destinations')->get();
        return view('be.pages.deleteuniversities', compact('universities'));
    }
    public function deleteUniversities(Request $request, $id)
    {
        $university = University::find($id);

        if (!$university) {
            return redirect()->back()->with('error', 'University not found.');
        }

        $university->delete();

        return redirect()->back()->with('success', 'University deleted successfully.');
    }
}
