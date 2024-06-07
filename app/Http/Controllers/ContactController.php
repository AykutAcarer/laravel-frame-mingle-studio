<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\Services\InstagramService;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    protected $instagramService;

    public function __construct(InstagramService $instagramService)
    {
        $this->instagramService = $instagramService;
    }

    //Show Contact Page
    public function index(){
        
        $userId = $this->instagramService->getUserId(); // Buraya Instagram kullanıcı ID'sini ekleyin
        $posts = $this->instagramService->getRecentPosts($userId);

        return view('contact', [
            'instagramPosts' => $posts
        ]);
    }
    //Contact Mail
    public function sendMail(Request $request)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $details = [
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ];

        Mail::to('infoframeminglestudio@gmail.com');

        return back()->with('message', 'Your message has been sent successfully!');
    }
}
