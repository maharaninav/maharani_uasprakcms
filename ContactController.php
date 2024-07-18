<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index() {
        $data = array ('title' => 'Contact');
        return view('layouts.public.contact', $data);
    }

    public function store(Request $request)
    {
        if (empty($request->name) || empty($request->email) || empty($request->phone_number) || empty($request->contact_message)) {
            return redirect()->route('contact')->with('error', 'Tidak boleh ada inputan kosong. Semua wajib diisi!');
        }

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'contact_message' => 'required',
        ]);

        try {
            DB::beginTransaction();
            $contact = new Contact();
            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->phone_number = $request->phone_number;
            $contact->contact_message = $request->contact_message;
            $contact->save();

            $this->sendEmail($request->all());
            DB::commit();
            return redirect()->route('contact')->with('success', 'Thank you for your message');
         } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('contact')->with('error', 'Failed to send message');
        }
    }

    private function sendEmail($data)
    {
        Mail::send('emails.contact', $data, function($message) use ($data) {
            $message->to($data['email'], $data['name'])
                    ->subject('Email from Contact Form');
        });
    }
}
