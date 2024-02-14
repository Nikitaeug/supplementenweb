<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\supplementenweb;


class supplementswebController extends Controller
{
    public function saveItem(Request $request)
    {
        $supplement = new supplementenweb();
        $supplement->name = $request->name;
        $supplement->is_complete = 0;
        $supplement->save();
        
        return view('welcome');
    }
}