<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Participant;
use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($event_id)
    {
        $event = Event::find($event_id);

        $participant_id = Registration::where('event_id', $event_id)->get('participant_id');
        $participants = Participant::find($participant_id);
        $participants_number = $participants->count();
        // dd($registrations);

        return view('event', compact('event', 'participants', 'participants_number'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('form.event');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'desc' => 'required',
            'date' => 'required',
            'maxp' => 'required',
        ]);

        $data = [
            'event_name' => $request -> input('name'),
            'description' => $request -> input('desc'),
            'date' => $request -> input('date'),
            'max_participants' => $request -> input('maxp'),
        ];
        Event::create($data);

        return to_route('event_form')->with('success', 'Berhasil menambahkan event!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $event_id)
    {
        $event = Event::find($event_id);
        return view('form.eventupdate', ['event'=> $event]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $event_id)
    {
        $request->validate([
            'event_name' => 'required',
            'desc' => 'required',
            'date' => 'required',
            'maxp' => 'required',
        ]);

        $data = [
            'event_name' => $request -> input('event_name'),
            'description' => $request -> input('desc'),
            'date' => $request -> input('date'),
            'max_participants' => $request -> input('maxp'),
        ];
        Event::find($event_id)->update($data);
        // dd($data);

        return Redirect::to('/update-event-form/'. $event_id)->with('updated', 'Berhasil mengubah acara!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $event = Event::find($id);
        $event->registrations()->delete();
        $event->delete();

        return to_route('events_view')->with('delete', 'Berhasil menghapus');
    }
}
