<?php

namespace App\Http\Controllers;

use App\Models\AdvertisementSize;
use Illuminate\Http\Request;

class AdvertisementSizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adsizes = AdvertisementSize::all();

        return view('advertisementSize.index', compact('adsizes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('advertisementSize.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        AdvertisementSize::create($request->all());

        toastr()->success('Advertisement size created successfully.');
        return redirect()->route('advertisement-size.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdvertisementSize  $advertisementSize
     * @return \Illuminate\Http\Response
     */
    public function show(AdvertisementSize $advertisementSize)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdvertisementSize  $advertisementSize
     * @return \Illuminate\Http\Response
     */
    public function edit(AdvertisementSize $advertisementSize)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdvertisementSize  $advertisementSize
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdvertisementSize $advertisementSize)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdvertisementSize  $advertisementSize
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdvertisementSize $advertisementSize)
    {
        //
    }
}
