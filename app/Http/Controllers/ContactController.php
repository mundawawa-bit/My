<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'pesan' => 'required'
        ]);

        Contact::create($request->all());

        return redirect()->back()->with('success', 'Pesanmu berhasil dikirim!');
    }
}
