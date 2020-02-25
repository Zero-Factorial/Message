<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Messages;

class MessageController extends Controller
{
    public function create(Request $request){

        $message = new Messages();
        $message->title = $request->title;
        $message->content = $request->content;

        $message->save();

        return redirect('/');
 

    }


   public function view($id){

        $message = Messages::FindOrFail($id);
        return view('message',['message'=>$message]);

   }

}
