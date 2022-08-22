<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view ("contact");
    }

    public function send(Request $request){

        $this->validate($request,[
          
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'numbercontact' => 'required'
        ]);
    }
}