<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Mail\ContactFormConfirm;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormSubmitted;

class ContactFormController extends Controller
{
    public function showForm()
    {
        return view('client.contact');
    }

    public function thank()
    {
        return view('client.contact.thankyou');
    }

    public function submitForm(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ],[
            'name.required' => 'Tên không được để trống',
            'email.required' => 'Email không được để trống',
            'phone.required' => 'Số điện thoại không được để trống',
            'subject.required' => 'Chủ đề không được để trống',
            'message.required' => 'Nội dung không được để trống',
            'email.email' => 'Email không hợp lệ',
            'phone.string' => 'Số điện thoại không hợp lệ',
            'phone.max' => 'Số điện thoại không được quá 20 ký tự',
            'name.string' => 'Tên không hợp lệ',
            'name.max' => 'Tên không được quá 255 ký tự',
            'subject.string' => 'Chủ đề không hợp lệ',
            'subject.max' => 'Chủ đề không được quá 255 ký tự',
            'message.string' => 'Nội dung không hợp lệ',
            'message.max' => 'Nội dung không được quá 500 ký tự',
        ]);

        // Lưu dữ liệu vào CSDL
        $contact = Contact::create($validatedData);

        // Gửi email
        //admin
        Mail::to('hoanganhtq2020@gmail.com')->send(new ContactFormSubmitted($contact));
        //user
        Mail::to($contact->email)->send(new ContactFormConfirm($contact));

        // Chuyển hướng đến trang cảm ơn
        return redirect()->route('contact.thankyou');
    }
}
