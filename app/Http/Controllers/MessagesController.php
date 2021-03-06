<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// include message model
use App\Message;

class MessagesController extends Controller
{
    // to access fields we pass in Request and define how we want to use it $request
    public function submit(Request $request) {
        // this measning this class
        // function we want is validate
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required'
        ]);

        // Upon submissiomn
        // Create new message submission to our Message Model
        // Eloquent
        $message = new Message;
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->message = $request->input('message');

        // Save message
        $message->save();

        // Redirect
        return redirect('/')->with('success', 'Message Sent');
    }

    public function getMessages() {
        // Eloquent
        // set a variable
        $messages = Message::all();

        // Return a view 'return view 'messages''
        // And pass data '->with'messages', $messages;'
        return view('messages')->with('messages', $messages);
    }
}
