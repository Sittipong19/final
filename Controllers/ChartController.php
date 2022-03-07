<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\movie;

class ChartController extends Controller
{
    public function chart(){

        $data1 = DB::table('movie')
        ->select('mov_year',DB::raw('sum(mov_gross) AS "mov_gross"'))
        ->groupBy('mov_year')
        ->get();
        $data = []; 

        foreach($data1 as $row){  
            $data['label'][] = $row->mov_year; 
            $data['data'][] = (int)$row->mov_gross; 
        }

        $data['chart_data'] = json_encode($data); 
        return view('chart',$data); 
    }
}
