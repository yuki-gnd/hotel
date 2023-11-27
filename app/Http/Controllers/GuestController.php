<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guest;

class GuestController extends Controller
{
    public function index()
    {
        $guests = Guest::all();
        return view('guest.index',['guests' => $guests]);     
    }
}
