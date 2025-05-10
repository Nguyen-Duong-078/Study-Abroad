<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
{
    $contacts = Contact::orderBy('created_at', 'desc')->paginate(10);
    return view('admin.contact.index', compact('contacts'));
}

public function show($id)
{
    $contact = Contact::findOrFail($id);
    return view('admin.contact.show', compact('contact'));
}

public function markAsRead($id)
{
    $contact = Contact::findOrFail($id);
    $contact->status = 1;
    $contact->save();

    return redirect()->back()->with('success', 'Đã đánh dấu là đã đọc');
}
}
