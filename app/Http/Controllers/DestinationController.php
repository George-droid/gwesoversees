<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Mail\InterestFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\StoreDestinationRequest;
use App\Http\Requests\UpdateDestinationRequest;

class DestinationController extends Controller
{
    public function submitContactForm(Request $request)
    {
        // Validate the form data
        $this->validate($request, [
            'university' => 'required',
            'client_name' => 'required',
            'client_email' => 'required|email',
            'client_phone' => 'required',
            'program' => 'required',
        ]);

        // Send an email
        Mail::to('wisgeorge.wg@gmail.com') // Replace with the recipient's email address
            ->send(new InterestFormMail($request));

        // Optionally, you can flash a success message or handle the response as needed
        return redirect()->back()->with('success', 'Your Interest has been sent successfully.');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function destinations()
    {
        return view('fe.pages.destinations');
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
    public function store(StoreDestinationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Destination $destination)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Destination $destination)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDestinationRequest $request, Destination $destination)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Destination $destination)
    {
        //
    }
}
