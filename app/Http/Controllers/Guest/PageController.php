<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class PageController extends Controller
{
    public function index()
    {
        $currDate = Date::now()->toDateString();
        $trains = Train::where('departure_date', '=', $currDate)->get();
        dd($trains);
        return view('welcome', compact('trains'));
    }
}
