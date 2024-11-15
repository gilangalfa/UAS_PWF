<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Participant;
use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class ParticipantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($event_id)
    {   
        $event = Event::find($event_id);
        return view('form.participant', compact('event'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $event_id)
    {
        $event = Event::find($event_id);
        
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
        ]);

        $data = [
            'name' => $request -> input('name'),
            'email' => $request -> input('email'),
            'phone_number' => $request -> input('phone_number'),
        ];

        
     
        // Mulai transaksi
        DB::beginTransaction();

        try {
            // 1. Tambah data ke tabel Participants
            $participant = Participant::create($data);

            // 2. Tambah data ke tabel Registrations
            Registration::create([
                'event_id' => $event->event_id,
                'participant_id' => $participant->participant_id,
            ]);

            // Commit transaksi
            DB::commit();

            } catch (\Exception $e) {
                // Rollback jika terjadi kesalahan
                DB::rollback();
                throw $e;
            }

        return Redirect::to('/participant-form/'. $event_id)->with('success', 'Registrasi sukses!');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
