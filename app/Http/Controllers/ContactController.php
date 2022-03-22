<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Controllers\ContactController;
use resources\views\ContactForm\create;

class ContactController extends Controller
{
  protected $table = 'contact';
    function index() {
        return view('contact');
      }
/**
     * Show the form to create a new blog post.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('ContactForm.create');
    }
    /**
     * Store a new blog post.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)   
    {
      $this->validate($request,[
        'name'=> 'required',
    'email'=> 'required|email:rfc,dns',
    'messages'=> 'required',
    ]);
    
    Contact::create(request(['name', 'email', 'messages']));
//     $contact = new Contact(); //on instancie un nouveau projet
// $contact->name = request('name'); //on set le titre avec la donnée envoyée du formulaire
//  $contact->email = request('email');
// $contact->messages = request('messages');
//  $contact->save(); // on enregistre dans la base
 return view('welcome');
    }
    
}
