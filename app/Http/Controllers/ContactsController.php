<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactsController extends Controller
{

       public function show(Contact $contact){

         //dd($contact);

         return view('contacts.show', compact('contact'));
       }





   public function index(){

      $contacts =  Contact::orderBy('name')->get();
      return view ('contacts.index', compact('contacts'));
   }


   public function create()
   {
   	return view('contacts.create');
   }

    public function store()
   {

      $contacts = Contact::create(

             [
                "name" => request()->first_name,
                "phone_number" => request()->phone_number
             ]);

      return redirect('/contact/index');

     //     $contacts = [
     //        [
     //           "name" => "John",
     //           "phone_number" => "123456789"
     //        ], 

     //        [
     //           "name" => "John 2",
     //           "phone_number" => "123456789"
     //        ], 

     //        [
     //           "name" => "John 3",
     //           "phone_number" => "123456789"
     //        ],
     //     ];

     //     $contacts[] = [
     //     'name' => request()->first_name,
     //     'phone_number' => request()->phone_number
     //     ];

     //     //dd($contacts);


   		// //$firstName = request() -> first_name;
   		// //$phoneNumber = request() -> phone_number;

     //     return view('contacts.show', compact('contacts'));


   		//return view('contacts.show', compact('firstName','phoneNumber'));

   		// return "Hey " . request() -> first_name . ". Your phone number is " . request() -> phone_number;

   		//return sprintf(
   		//	"Hey %s. Your phone number is %s", 
   		//	request() -> first_name, 
   		//	request() -> phone_number)
   	}
}
