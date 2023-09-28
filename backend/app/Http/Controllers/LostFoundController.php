<?php

namespace App\Http\Controllers;

use App\Models\LostFound;
use Illuminate\Http\Request;

class LostFoundController extends Controller
{
    public function getLostFound()
    {
        return LostFound::all();
    }
    
    public function addLostItem(Request $request)
    {
        $jsonData = $request->json()->all();
    
        $name = $jsonData["name"];
        $place = $jsonData["place"];
        $property = $jsonData["property"];
    
        $lostFound = new LostFound();
        $lostFound->name = $name;
        $lostFound->place = $place;
        $lostFound->property = $property;
        $lostFound->save();
    
        return $jsonData;
    }
}
