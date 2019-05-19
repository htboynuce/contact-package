<?php

namespace Thuanvh\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Thuanvh\Contact\Http\Requests\ContactRequest;
use Thuanvh\Contact\Mail\ContactMailable;
use Thuanvh\Contact\Repositories\ContactRepository;

class ContactController extends Controller
{
    /**
     * Contact reposiory
     * @var ContactRepository
     */
    protected $_contactRepository;

    /**
     * init
     * ContactController constructor.
     * @param ContactRepository $contactRepository
     */
    public function __construct(ContactRepository $contactRepository)
    {
        $this->_contactRepository = $contactRepository;
    }

    /**
     * view form contact
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        return view('contact::contact');
    }

    /**
     * send message
     * @param ContactRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function send(ContactRequest $request){
        Mail::to(config('contact.send_mail_to'))->send(new ContactMailable($request->message, $request->name));
        $this->_contactRepository->create($request->all());
        return redirect()->route('contact')->with('ok', __('You have successfully sent a message!'));
    }
}
