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
}
