<?php

namespace App\Http\Controllers;

use App\Models\Offreemploi;
use Illuminate\Http\Request;

class OffreemploiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         
        $offreemplois = Offreemploi::latest()->paginate(5);

        return view('offreemplois.index', compact('offreemplois'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function welcome()
    {
         
        $offreemplois = Offreemploi::latest()->paginate(5);

        return view('offreemplois.welcome', compact('offreemplois'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('offreemplois.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required',
            'description' => 'required',
            'etat' => 'required' 
        ]);

        Offreemploi::create($request->all());

        return redirect()->route('offreemplois.index')
            ->with('success', ' created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Offreemploi  $offreemploi
     * @return \Illuminate\Http\Response
     */
    public function show(Offreemploi $offreemploi)
    {
        return view('offreemplois.show', compact('offreemploi'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Offreemploi  $offreemploi
     * @return \Illuminate\Http\Response
     */
    public function edit(Offreemploi $offreemploi)
    {
        return view('offreemplois.edit', compact('offreemploi'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Offreemploi  $offreemploi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Offreemploi $offreemploi)
    {
        $request->validate([
            'titre' => 'required',
            'description' => 'required',
            'etat' => 'required' 
        ]);
        $offreemploi->update($request->all());

        return redirect()->route('offreemplois.index')
            ->with('success', 'offreemplois updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Offreemploi  $offreemploi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Offreemploi $offreemploi)
    {
        $offreemploi->delete();

        return redirect()->route('offreemplois.index')
            ->with('success', 'offreemplois deleted successfully');
    }
}
