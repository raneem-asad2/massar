<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactMessageController extends Controller
{
    public function index()
    {
        $messages = ContactMessage::all();
        return view('admin.users.contact-messages', compact('messages'));
    }

    public function create()
    {
        // No implementation needed here for your current contact form
    }

    public function store(Request $request)
    {
        // This is the updated part
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message_text' => 'required|string', // Changed from 'message' to 'message_text'
        ]);

        // ContactMessage::create($validatedData) will now correctly use the 'message_text' key
        ContactMessage::create($validatedData);

        if ($request->expectsJson()) {
            return response()->json(['message' => 'Your message has been sent successfully!'], 200);
        }

        // Fallback for non-AJAX requests
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }

    public function show(ContactMessage $contactMessage)
    {
        return view('admin.users.show-contact-messages', compact('contactMessage'));
    }

    public function edit(ContactMessage $contactMessage)
    {
        // No implementation needed here for your current contact form
    }

    public function update(Request $request, ContactMessage $contactMessage)
    {
        // No implementation needed here for your current contact form
    }

    public function destroy(ContactMessage $contactMessage)
    {
        $contactMessage->delete();
        return redirect()->route('contact-messages.index')->with('success', 'Message deleted.');
    }
}