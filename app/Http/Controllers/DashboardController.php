<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $data = Event::latest();

        

        if (request('search')) {
            $data->where('event_name', request('search'));
        }

        return view('dashboard', ['data' => $data->get()]);
    }
}
