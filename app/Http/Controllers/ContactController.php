<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::all();
        return view('admin/pages/contacts/contacts',compact('contacts'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'Message' => 'required'
        ]);
        
        Contact::create([
            'name'=> $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'Message' => $request->Message
        ]);

        return redirect()->route('pages.index');
    }

    public function update(Request $request){

        
        $request->validate([
            'is_checked' => 'required'
        ]);
        $contact = Contact::findorfail($request->id);
        $contact->update([
            'is_checked' => true,
        ]);

        return redirect()->route('contacts.index')
            ->with('message', 'message resolved successfully');
    }


    function destroy($id){
        
        $contact = Contact::findorfail($id);
        $contact->delete();

        return redirect()->route('contacts.index')
            ->with('message', 'message deleted successfully');
    }
}
