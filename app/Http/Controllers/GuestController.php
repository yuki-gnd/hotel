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

    public function add()
    {
        return view('guest.add');
    }

    public function create(Request $request)
    {
        $param = [
            'name' => $request->name,
            'address' => $request->address,
            'tel' => $request->tel,
        ];
        Guest::insert()

        $guest = new Guest;
        $form = $request->all();
        $guest->fill($form)->save();
        return redirect('guest.add');
    }
}
