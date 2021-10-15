<?php

namespace App\Http\Controllers;

use App\Events\ContactCreated;
use App\Models\Contact;
use App\Models\User;
use App\Notifications\ContactNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class ContactsController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string',
            'phone_number' => 'required|string',
            'email' => 'required|string',
            'message' => 'required|string'
        ]);
        $contact = Contact::create($request->all());
        event(new ContactCreated($contact));
        return 'the message is Sent';
    }
}