<?php

namespace Thuanvh\Contact\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Thuanvh\Contact\Mail\ContactMailable;
use Thuanvh\Contact\Models\Contact;
use Thuanvh\Contact\Repositories\ContactRepository;

class ContactController extends Controller
{
    protected $_contactRepository;
    public function __construct(ContactRepository $contactRepository)
    {
        $this->_contactRepository = $contactRepository;
    }

    public function index(){
        return view('contact::contact');
    }

    public function send(Request $request){
        Mail::to(config('contact.send_mail_to'))->send(new ContactMailable($request->message, $request->name));
        $this->_contactRepository->create($request->all());
//        Contact::create($request->all());
        return redirect()->route('contact');
    }
}
