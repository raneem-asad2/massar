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
        return view('admin.users.create-contact-messages');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message_text' => 'required|string',
        ]);

        ContactMessage::create($request->all());

        return redirect()->route('admin.contact-messages.index')->with('success', 'Message created.');
    }

    public function show(ContactMessage $contactMessage)
    {
        return view('admin.users.show-contact-messages', compact('contactMessage'));
    }

    public function edit(ContactMessage $contactMessage)
    {
        return view('admin.users.edit-contact-messages', compact('contactMessage'));
    }

    public function update(Request $request, ContactMessage $contactMessage)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message_text' => 'required|string',
        ]);

        $contactMessage->update($request->all());

        return redirect()->route('admin.contact-messages.index')->with('success', 'Message updated.');
    }

    public function destroy(ContactMessage $contactMessage)
    {
        $contactMessage->delete();
        return redirect()->route('admin.contact-messages.index')->with('success', 'Message deleted.');
    }
}
