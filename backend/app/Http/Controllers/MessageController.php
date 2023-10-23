<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function getMessage()
    {
        return Message::all()->reverse();
    }
    
    public function addMessage(Request $request)
    {
        $jsonData = $request->json()->all();
        
        $title = $jsonData["title"];
        $content = $jsonData["content"];
        
        $message = new Message();
        $message->title = $title;
        $message->content = $content;
        $message->save();
        
        return $jsonData;
    }

    public function updateMessage(Request $request)
    {
        $jsonData = $request->json()->all();
        $id = $jsonData["id"];
        $title = $jsonData["title"];
        $content = $jsonData["content"];

        $message = Message::where("id", "=", $id)->first();
        $message->title = $title;
        $message->content = $content;
        $message->save();
    }

    public function deleteMessage(Request $request)
    {
        $jsonData = $request->json()->all();
        $id = $jsonData["id"];

        Message::where('id', $id)->delete();
        return "deleted message(id: $id)";
    }
}
