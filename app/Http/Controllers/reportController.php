<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class reportController extends Controller
{
    // report view
    public function viewReport()
    {
        return view('report.report');
    }
}
