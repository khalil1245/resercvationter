<?php

namespace App\Http\Controllers;
use App\Models\Zones;
use App\Models\Horaire;
use App\Models\Classes;
use App\Models\Reservations;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     //
    //     $reservation = Reservations::all();
    //         return view('reservation.liste_reservation', ['reservation' => $reservation]);
    // }
    // public function listezone()
    // {
    //     //
    //     $zones = Zones::all();
    //     return view('reservation.liste_reservation', ['zones' => $zones]);
    // }
    // public function listehoraire()
    // {
    //     //
    //     $horaire = Horaire::all();
    //     return view('reservation.liste_reservation', ['horaire' => $horaire]);
    // }
    // public function listeclasse()
    // {
    //     //
    //     $classes = Classes::all();
    //     return view('reservation.liste_reservation', ['classes' => $classes]);
    // }

    public function index()
    {
        $zones = Zones::all();
        $horaires = Horaire::all();
        $classes = Classes::all();

        return view('reservation.liste_reservation', compact('zones', 'horaires', 'classes'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // enregistre une reservation
        $reservation = new Reservations();
        // $reservation->zone_id = $request->input('zone');
        $reservation->zone_id = $request->input('zone');
        $reservation->classe_id = $request->input('classe');
        $reservation->horaire_id = $request->input('horaire');
        $reservation->Date_Reservation = now()->format('Y-m-d H:i:s');
        $reservation->save();   
        return redirect()->route('reservations');
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
