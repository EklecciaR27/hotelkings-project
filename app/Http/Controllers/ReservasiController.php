<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use App\Models\Reservasi;
use Illuminate\Http\Request;
use App\Exports\ReservasiExport;
use Illuminate\Routing\Controller;

class ReservasiController extends Controller
{

    public function search(Request $request)
    {
    $query = $request->input('query');

    $reservasi = Reservasi::where('nama', 'like', '%' . $query . '%')
        ->orWhere('notelp', 'like', '%' . $query . '%')
        ->orWhere('email', 'like', '%' . $query . '%')
        ->orWhere('jumlahkamar', 'like', '%' . $query . '%')
        ->orWhere('guest_id', 'like', '%' . $query . '%')
        ->get();

    return view('datahotel.reservasi', compact('reservasi'));
    }

    public function create(){
        return view('datahotel.crud.create', [
        'guest' => Guest::all()
        ]);
    }

    public function store(Request $request){
        // Validate Input
        // $validateData = $request->validate([
        //     'nama' => 'required|string',
        //     'notelp' => 'required|integer',
        //     'email' => 'required|string',
        //     'jumlahkamar' => 'required|integer',
        //     'guest_id' => 'required',
        //     'gambarktp' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        //     'filebukti' => 'required|mimes:pdf,excel|max:2048',
        // ]);

        $namaGambar = "";

        if ($request->hasFile("gambarktp") && $request->file("gambarktp")->isValid()) {

            $filename = $request->file("gambarktp")->getClientOriginalName();

            $filenameArr = explode(".", $filename);

            $ekstensi = strtolower(end($filenameArr));

            $namaGambar = $request->nama . "." . $ekstensi;

            $request->file("gambarktp")->move("assets/ktp/", $namaGambar);

        }

        Reservasi::create([
                'nama'  => $request->nama,
                'notelp'  => $request->notelp,
                'email' => $request->email,
                'jumlahkamar' => $request->jumlahkamar,
                'guest_id' => $request->guest_id,
                'gambarktp' => $namaGambar,
        ]);

        return redirect()->route('datahotel.crud.create')->with('success','Reservasi Berhasil ditambahkan');
    }
    public function edit($id){
        return view('datahotel.crud.edit',[
            'reservasis' => Reservasi::all()->where('id', $id)->first(),
            'guests' => Guest::all(),
        ]);
    }

    public function update(Request $request, $id){
        $request->validate([
            'nama' => 'required|string',
            'notelp' => 'required|integer',
            'email' => 'required|string',
            'jumlahkamar' => 'required|integer',
            'guest_id' => 'required',

        ]);



        $reservasi = Reservasi::findOrFail($id);
        $reservasi->update([
        'nama' => $request->nama,
        'notelp' => $request->notelp,
        'email' => $request->email,
        'jumlahkamar' => $request->jumlahkamar,
        'guest_id' => $request->guest_id,
    ]);
    session(['edited_id' => $id]);
    return redirect()->route('datahotel.reservasi')->with('success','Reservasi ID $id Berhasil diubah');
    }

    public function delete($id){
        $reservasi = Reservasi::findOrFail($id);
        $reservasi->delete();
        session(['deleted_id' => $id]);
        return redirect()->route('datahotel.reservasi')->with('success1','Reservasi ID $id Berhasil dihapus');
    }

    public function downloadExcel()
        {
            $reservasi = Reservasi::all();
            // Generate Excel content
            $content = "ID Reservasi\tNo Telp\tEmail\tNama\tJumlah Kamar\tGuestID\tGambar\n";

        foreach ($reservasi as $res) {
            $content .= "{$res->id}\t{$res->notelp}\t{$res->email}\t{$res->nama}\t{$res->jumlahkamar}\t{$res->guest_id}\t{$res->gambarktp}\n";
        }

        // Set headers for download
        header("Content-type: application/vnd.ms-excel");
        header("Content-Disposition: attachment; filename=reservasi.xls");
        header("Pragma: no-cache");
        header("Expires: 0");

        // Output content to the browser
        echo $content;
        exit;
    }

}
