<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    //
    public function create(): View
    {
        return view('contacts');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'bail|required|email',
            'message' => 'bail|required|max:500'
        ]);

        //$contact = new Contact();
        // $contact->email = $request->email;
        // $contact->message = $request->message;
        // $contact->save();
        dd(Contact::create([
            'email' => $request->email,
            'message' => $request->message,
        ]));


        return "C'est bien enregistré !";
    }
}
