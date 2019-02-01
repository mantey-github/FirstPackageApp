<?php
/**
 * Created by PhpStorm.
 * User: mantey
 * Date: 31/01/2019
 * Time: 3:37 PM
 */

namespace mantey\contactform\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use mantey\contactform\Models\ContactForm;


class ContactFormController extends Controller {

    public function index()
    {
        return view('contactform::contact');
    }

    public function sendMail(Request $request)
    {
        ContactForm::create($request->all());

        return redirect()->route('contact')->with(['message' => 'Thank you, your mail has been sent successfully.']);
    }


}