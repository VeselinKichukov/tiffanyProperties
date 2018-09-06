<?php

namespace App\Http\Controllers;

// OOTB imports
use Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

use App\Mail\ContactsFormMail;
use App\Http\Controllers\Controller;

// 3rd party imports
use Vinkla\Alert\Facades\Alert;

class ContactController extends Controller
{
    public function show() {
      Log::channel('slack')->info('Something happened!');
      return view('contacts');
    }

    public function mailToAdmin(Request $request) {
      // get data from the Request
      $data = $request->all();

      $email = new ContactsFormMail($data['email'], $data['name'], $data['message']);

      Mail::to(env('MAIL_TO'))->send($email);

      Alert::success('Eat my shorts.');
      return redirect()->back();
    }
}
