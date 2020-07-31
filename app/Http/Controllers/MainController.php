<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller{

    public function submit(Request $request){
        $this->validate ($request, [
          'email' => 'required|email',
          'password' => [
            'required',
            'regex:/[a-z]/',
            'regex:/[0-9]/',
            'regex:/[_]/',
            'min:4',
            'max:20',
          ], 
          
      ]);
      return "WELCOME TO INDEX PAGE";
    }
  
}
