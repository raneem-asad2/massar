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

    }

    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'message' => 'required|string',
    ]);

    ContactMessage::create([
        'name' => $request->name,
        'email' => $request->email,
        'message_text' => $request->message,
    ]);

    return redirect()->back()->with('success', 'Message sent successfully!');
}

    public function show(ContactMessage $contactMessage)
    {
        return view('admin.users.show-contact-messages', compact('contactMessage'));
    }

    public function edit(ContactMessage $contactMessage)
    {
    }

    public function update(Request $request, ContactMessage $contactMessage)
    {
    
    }

    public function destroy(ContactMessage $contactMessage)
    {
        $contactMessage->delete();
        return redirect()->route('contact-messages.index')->with('success', 'Message deleted.');
    }
}
