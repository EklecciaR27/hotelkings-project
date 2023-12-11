<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function create(){
        return view('datahotel.crudGuest.create', [

        ]);
    }

    public function search(Request $request)
    {
    $query = $request->input('query');

    $guest = Guest::where('nama', 'like', '%' . $query . '%')
        ->orWhere('NIK', 'like', '%' . $query . '%')
        ->get();

    return view('datahotel.guest', compact('guest'));
    }


    public function store(Request $request){
        // Validate Input
        $validateData = $request->validate([
            'nama' => 'required|string',
            'NIK' => 'required|integer',

        ]);

        Guest::create($validateData);

        return redirect()->route('datahotel.guest.create')->with('success','Data Guest Berhasil ditambahkan');
    }

}
