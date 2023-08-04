<?php

namespace App\Http\Controllers;

use App\Models\prescriptions;
use App\Models\prescription_view;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CalendarController extends Controller
{
    public function index(Request $request) {
        $datas = prescription_view::all();
        $visitDate = prescription_view::pluck('visit_date');
        
        return response()->json([
            'datas' => $datas,
            'visitDate' => $visitDate,
        ]);
    }
}