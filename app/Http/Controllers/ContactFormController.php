<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactFormSubmission;

class ContactFormController extends Controller
{
    //
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'number' => 'required|string|max:15',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        try {
            // Create the contact form submission
            ContactFormSubmission::create($validated);

            // Flash success message to the session
            session()->flash('success', 'Your message has been sent successfully!');

            // Optionally, you can redirect to the contact page or another view
            return redirect()->route('contactUs'); // Replace 'contact.form' with your route
        } catch (\Exception $e) {
            // Flash error message to the session
            session()->flash('error', 'There was an error sending your message. Please try again.');

            // Return redirect in case of error
            return redirect()->route('contactUs'); // Replace 'contact.form' with your route
        }
    }
}
