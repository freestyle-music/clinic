<?php

namespace App\Http\Controllers;

use App\Models\prescriptions;
use App\Models\prescription_view;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CalendarController extends Controller
{
    public function index(Request $request) {
        $datas = prescriptions::all();
        $visitDate = Prescriptions::pluck('visit_date');
        $detailmode = prescription_view::all();

        return response()->json([
            'datas' => $datas,
            'visitDate' => $visitDate,
            'detailmode' => $detailmode,
        ]);
    }
}