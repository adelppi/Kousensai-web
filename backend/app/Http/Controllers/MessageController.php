<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function getMessage()
    {
        return Message::all();
    }
    
    public function addMessage(Request $request)
    {
        $jsonData = $request->json()->all();
    
        $content = $jsonData["content"];
    
        $message = new Message();
        $message->content = $content;
        $message->save();
    
        return $jsonData;
    }

    public function truncateMessage(Request $request)
    {
        Message::truncate();
        return "truncated table";
    }
}
