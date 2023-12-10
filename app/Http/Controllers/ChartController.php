<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use App\Charts\DataChart;
use App\Models\Reservasi;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function index(DataChart $chart){
        // $data['chart'] = $chart->build();
        // //return view('datahotel.homeadmin')->with($chart);
        // return view('datahotel.homeadmin', compact('chart'));
        $totalReservasi = Reservasi::pluck('id'); // Ambil data jumlah reservasi dari database
        $totalTamu = Guest::pluck('id'); // Ambil data jumlah tamu dari database

        return view('datahotel.charts', compact('totalReservasi', 'totalTamu'));
    }
}
