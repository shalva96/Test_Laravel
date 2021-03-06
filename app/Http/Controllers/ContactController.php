<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\models\Contact;


class ContactController extends Controller{
    
	public function submit(ContactRequest $req){

		$contact = new Contact();
		$contact->name = $req->input('name');
		$contact->email = $req->input('email');
		$contact->subject = $req->input('subject');
		$contact->messege = $req->input('messege');

		$contact->save();

		return redirect()->route('home')->with('success', 'Message add');
	}

	public function allData(){
		$contact = new Contact();
		return view('messages', ['data' => $contact->all()]);
	}

	public function showOneMessage($id){
		$contact = new Contact();
		return view('one-messages', ['data' => $contact->find($id)]);
	}

	public function updataMessage($id){
		$contact = new Contact();
		return view('update-message', ['data' => $contact->find($id)]);		
	}

	public function updataMessageSubmit($id, ContactRequest $req){

		$contact = Contact::find($id);
		$contact->name = $req->input('name');
		$contact->email = $req->input('email');
		$contact->subject = $req->input('subject');
		$contact->messege = $req->input('messege');

		$contact->save();

		return redirect()->route('contact-data-one', $id)->with('success', 'Message update');
	}

	public function deleteMessage($id){
		Contact::find($id)->delete();
		return redirect()->route('contact-data')->with('success', 'Message delete');
	}
}
