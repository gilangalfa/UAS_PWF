<?php

namespace App\Http\Controllers;

use App\Models\Seminar;
use App\Models\Workshop;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $seminars = Seminar::latest()->get();
        $workshops = Workshop::latest()->get();

        // if (request('search')) {
        //     $data->where('event_name', request('search'));
        // }

        return view('dashboard', ['data' => $data->get()]);
    }
}
