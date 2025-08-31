<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactMessageController extends Controller
{
    public function index()
    {
        $messages = ContactMessage::all();
        return view('contact_messages.index', compact('messages'));
    }

    public function create()
    {
        return view('contact_messages.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message_text' => 'required|string',
        ]);

        ContactMessage::create($request->all());

        return redirect()->route('contact-messages.index')->with('success', 'Message created.');
    }

    public function show(ContactMessage $contactMessage)
    {
        return view('contact_messages.show', compact('contactMessage'));
    }

    public function edit(ContactMessage $contactMessage)
    {
        return view('contact_messages.edit', compact('contactMessage'));
    }

    public function update(Request $request, ContactMessage $contactMessage)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message_text' => 'required|string',
        ]);

        $contactMessage->update($request->all());

        return redirect()->route('contact-messages.index')->with('success', 'Message updated.');
    }

    public function destroy(ContactMessage $contactMessage)
    {
        $contactMessage->delete();
        return redirect()->route('contact-messages.index')->with('success', 'Message deleted.');
    }
}
