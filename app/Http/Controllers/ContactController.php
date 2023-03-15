<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function submit(ContactRequest $reg)
    {
        $contact = new Contact();
        $contact->name = $reg->input('name');
        $contact->email = $reg->input('email');
        $contact->subject = $reg->input('subject');
        $contact->message = $reg->input('message');

        $contact->save();

        return redirect()->route('home')->with('success','Сообщение было добавлено');

//        $validation = $reg->validate([
//            'subject' => 'required|min:5|max:50',
//            'message' => 'required|min:15|max:200'
//        ]);
//        dd($reg->input('subject'));

//        return $reg->input('subject');
    }

    public function allData()
    {
        $contact = new Contact;
//        $contact->all();
//        $contact = Contact::all();

//        dd(Contact::all());



        return view('messages', ['data' => Contact::all()]);
//        return view('messages', ['data' => $contact->orderBy('id','asc')->skip(1)->take(1)->get()]);
//        return view('messages', ['data' => $contact->where('subject', '<>', 'Subject')->get()]);

    }

    public function showOneMessage($id)
    {
        $contact = new Contact;


        return view('one-messages', ['data' => $contact->find($id)]);
    }

    public function updateOneMessage($id)
    {
        $contact = new Contact();

        return view('update-message', ['data' => $contact->find($id)]);
    }

    public function updateOneMessageSubmit($id, ContactRequest $reg)
    {
        $contact = Contact::find($id);
        $contact->name = $reg->input('name');
        $contact->email = $reg->input('email');
        $contact->subject = $reg->input('subject');
        $contact->message = $reg->input('message');

        $contact->save();

        return redirect()->route('contact-data-one', $id)->with('success','Сообщение было обновлено');

//        $validation = $reg->validate([
//            'subject' => 'required|min:5|max:50',
//            'message' => 'required|min:15|max:200'
//        ]);
//        dd($reg->input('subject'));

//        return $reg->input('subject');
    }

    public function deleteOneMessageSubmit($id)
    {
//        $contact = Contact::find($id);
//        $contact->delete();

        Contact::find($id)->delete();

        return redirect()->route('contact-data')->with('success','Сообщение было удалено');

//        $validation = $reg->validate([
//            'subject' => 'required|min:5|max:50',
//            'message' => 'required|min:15|max:200'
//        ]);
//        dd($reg->input('subject'));

//        return $reg->input('subject');
    }

}
