<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{

 public function index() {
        $contacts = Contact::all();
        return view('contacts.index', compact('contacts'));
    }

     public function create() {
        return view('contacts.create');
    }

    public function store(Request $request) {
      
        $validatedData = $request->validate([
            'name' => 'required|string|max:30',
            'email' => 'required|string|max:255',
            'question' => 'required|string',
        ]);
    

        Contact::create($validatedData);

         return redirect()->route('contacts.index')->with('success', 'contact created!');
    }
}
