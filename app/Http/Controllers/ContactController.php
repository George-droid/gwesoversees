<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;


class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function contact()
    {
        return view('fe.pages.contact-us');
    }

    // public function sendClientMessage(Request $request)
    // {

    //     return view('fe.pages.contact-us');
    // }

    public function submitContactForm(Request $request)
    {
        // Validate the form data
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'subject' => 'required',
            'consultancy_option' => 'required',
            'message' => 'required',
        ]);

        // Send an email
        Mail::to('wisgeorge.wg@gmail.com') // Replace with the recipient's email address
            ->send(new ContactFormMail($request));

        // Optionally, you can flash a success message or handle the response as needed
        return redirect()->back()->with('success', 'Your message has been sent successfully.');
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
    public function store(StoreContactRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContactRequest $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
