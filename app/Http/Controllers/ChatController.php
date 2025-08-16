<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class ChatController extends Controller
{
    public function welcome()
    {
        $messages = Message::orderBy('created_at')->get();
        return view('welcome', compact('messages'));
    }
}
