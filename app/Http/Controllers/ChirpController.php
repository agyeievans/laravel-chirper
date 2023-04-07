<?php

namespace App\Http\Controllers;

use App\Models\Chirp;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;

class ChirpController extends Controller
{
    public function index(): View
    {
        return view('chirps.index');
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
    public function store(Request $request): RedirectResponse
    {
        // store chirp and perform validation
        $validated = $request->validate([
            'message' => 'required|string|max:255',
        ]);

        //  creating a record that will belong to the logged in user by leveraging a chirps relationship
        $request->user()->chirps()->create($validated);

        return redirect(route('chirps.index'));

    }

    /**
     * Display the specified resource.
     */
    public function show(Chirp $chirp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Chirp $chirp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Chirp $chirp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Chirp $chirp)
    {
        //
    }
}
