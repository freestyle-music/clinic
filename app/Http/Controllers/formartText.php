<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formartText extends Controller
{
    public function formart2f($num){
        return  number_format($num,2,",",".");
    }
}
