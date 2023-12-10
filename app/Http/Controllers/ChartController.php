<?php

namespace App\Http\Controllers;

use App\Charts\DataChart;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function index(DataChart $chart){
        $data['chart'] = $chart->build();
        return view('data/home')->with($chart);

    }
}
