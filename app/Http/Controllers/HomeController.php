<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Messages;
class HomeController extends Controller
{
    //

    public function index()
    
    {
      
       $messages = Messages::all();
       
       return view("home",['messages' => $messages]);


    }



}
