<?php

namespace App\Http\Controllers;

use App\longsor;
use Illuminate\Http\Request;

class longsorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $longsors = Longsor::all();
    return view ('longsors.index', ['longsors' => $longsors]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    return view('longsors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $longsor = new longsor;
        $longsor->desa = $request->desa;
        $longsor->desa = $request->kecamatan;
        $longsor->desa = $request->jumlah_kejadian;
        $longsor->desa = $request->tahun;

        $longsors->save();

        return redirect('/longsors');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\longsor  $longsor
     * @return \Illuminate\Http\Response
     */
    public function show(longsor $longsor)
    {
        return view('longsors.show', compact('longsor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\longsor  $longsor
     * @return \Illuminate\Http\Response
     */
    public function edit(longsor $longsor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\longsor  $longsor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, longsor $longsor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\longsor  $longsor
     * @return \Illuminate\Http\Response
     */
    public function destroy(longsor $longsor)
    {
        //
    }
}
