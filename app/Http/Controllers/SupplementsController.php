<?php

namespace App\Http\Controllers;

use App\Models\Supplement;
use Illuminate\Http\Request;


class SupplementsController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function saveItem(Request $request)
    {
        return redirect('/');
    }
}