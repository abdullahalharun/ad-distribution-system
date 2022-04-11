<?php

namespace App\Http\Controllers;

use App\Models\AdvertisementDetail;
use App\Models\AdvertisementSize;
use App\Models\Institution;
use App\Models\Newspaper;
use Illuminate\Http\Request;

class AdvertisementDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ads = AdvertisementDetail::all();

        return view('advertisement.index', compact('ads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $institutions = Institution::all();
        $adsizes = AdvertisementSize::all();
        $newspapers = Newspaper::all();

        return view('advertisement.create', compact('institutions', 'adsizes', 'newspapers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        AdvertisementDetail::create($request->all());

        toastr()->success('Advertisement Added Successfully.');
        return redirect()->route('advertisement.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdvertisementDetail  $advertisementDetail
     * @return \Illuminate\Http\Response
     */
    public function show(AdvertisementDetail $advertisementDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdvertisementDetail  $advertisementDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(AdvertisementDetail $advertisementDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdvertisementDetail  $advertisementDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdvertisementDetail $advertisementDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdvertisementDetail  $advertisementDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdvertisementDetail $advertisementDetail)
    {
        //
    }
}
