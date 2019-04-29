<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        return 'SUCCESS';
    }
    // we still want to call a message model and insert it into the db
}
