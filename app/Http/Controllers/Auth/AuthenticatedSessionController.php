<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

use App\Models\Seminar;
use App\Models\Workshop;
use App\Models\ParticipantRequirement;
use App\Models\Participant;
use App\Models\Registration;

class AuthenticatedSessionController extends Controller
{
    public function getAllSeminars()
    {
        //
        $seminars = Seminar::latest()->get();

        // if (request('search')) {
        //     $data->where('event_name', request('search'));
        // }
        return view('admin.seminars', ['title' => 'Admin Dashboard', 'seminars'=>$seminars]);
    }

    public function getAllWorkshops()
    {
        // 
        $workshops = Workshop::latest()->get();

        // if (request('search')) {
        //     $data->where('event_name', request('search'));
        // }
        return view('admin.workshops', ['title' => 'Admin Dashboard', 'workshops'=>$workshops]);
    }

    public function getSeminar(Seminar $seminar)
    {
        //
        $requirements = ParticipantRequirement::where('seminar_id', $seminar->id)->get();
        $participant_id = Registration::where('seminar_id', $seminar->id)->get('participant_id');
        // $participants = Participant::latest();
        $participants = Participant::find($participant_id);

        // Quidem
        // dd($participants);
    
        if (request('search')) {
            $participants = $participants->filter(function ($participant) {
                return stripos($participant->name, request('search')) !== false;
            });
        }  

        return view('admin.detail_seminar', [
            // 'data' => $data,
            'seminar' => $seminar,
            'requirements' => $requirements,
            'participants' => $participants
        ]);
      
        // dd($participants);
        // dd($requirements);
    
        // return view('admin.detail_seminar', compact('seminar', 'requirements', 'participants'));
    }

    public function getWorkshop(Workshop $workshop)
    {
        //
        $requirements = ParticipantRequirement::where('workshop_id', $workshop->id)->get();
        $participant_id = Registration::where('workshop_id', $workshop->id)->get('participant_id');
        // $participants = Participant::latest();
        $participants = Participant::find($participant_id);

        // Quidem
        // dd($participants);
    
        if (request('search')) {
            $participants = $participants->filter(function ($participant) {
                return stripos($participant->name, request('search')) !== false;
            });
        }
        

        return view('admin.detail_workshop', [
            // 'data' => $data,
            'workshop' => $workshop,
            'requirements' => $requirements,
            'participants' => $participants
        ]);
    }
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        

        $request->authenticate();
        $request->session()->regenerate();
        return redirect()->intended(route('admin', absolute: false));
    }

    public function delSeminarParticipant(Seminar $seminar, Participant $participant) 
    {
        $participant->registrations()->delete();
        $participant->delete();

        return to_route('admin-seminar', ['seminar'=>$seminar]);
    }

    public function delWorkshopParticipant(Workshop $workshop, Participant $participant) 
    {
        $participant->registrations()->delete();
        $participant->delete();

        return to_route('admin-workshop', ['workshop'=>$workshop]);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
